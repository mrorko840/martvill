<?php
/**
 * @package Permission
 * @author TechVillage <support@techvill.org>
 * @contributor Millat <[millat.techvill@gmail.com]>
 * @created 18-09-2021
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\RoleUser;

class Permission extends Model
{
    use HasFactory;

    /**
     * insert permission
     * @return boolean
     */
    public static function insertPermission(array $permissions)
    {
        if (self::insert($permissions)) {
            self::forgetCache();
            return true;
        }
        return false;
    }

    /**
     * auth user permissions name
     * @param  int $userId
     * @return array
     */
    public static function getAuthUserPermission($userId)
    {
        return PermissionRole::permissionNamesByRoleID(RoleUser::getRoleIDByUser($userId));
    }
}
