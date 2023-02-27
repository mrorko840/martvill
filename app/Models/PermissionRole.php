<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use Cache;

class PermissionRole extends Model
{
    use HasFactory;

    protected $fillable = ['permission_id', 'role_id'];

    public $timestamps = false;

    /**
     * store
     * @param array $data
     * @return boolean
     */
    public function store($data = [])
    {
        if (self::create($data)) {
            self::forgetCache();
            return true;
        }

        return false;
    }

    /**
     * remove permission role
     * @param object $data
     * @return boolean
     */
    public function remove($data)
    {
        if ($data->delete()) {
            self::forgetCache();
            return true;
        }

        return false;
    }

    /**
     * permission names by role id
     * @param  int $roleId
     * @return array
     */
    public static function permissionNamesByRoleID($roleId)
    {
        $data = Cache::get(config('cache.prefix') . '-permission-name-by-role-' . $roleId);

        if (empty($data)) {
            if ($roleId == 1) {
                $data = Permission::getAll()
                            ->pluck('name')
                            ->toArray();
            } else {
                $data = Permission::getAll()
                            ->whereIn('id', self::getAll()->where('role_id', $roleId )->pluck('permission_id')->toArray())
                            ->pluck('name')
                            ->toArray();
            }

            Cache::put(config('cache.prefix') . '-permission-name-by-role-' . $roleId, $data, 30 * 86400);
        }

        return $data;
    }
}
