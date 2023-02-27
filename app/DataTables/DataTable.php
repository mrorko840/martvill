<?php
/**
 * @package DataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Millat <[millat.techvill@gmail.com]>
 * @created 07-09-2021
 */
namespace App\DataTables;

use Yajra\DataTables\Services\DataTable as BaseDataTable;
use App\Models\Permission;
use App\Models\Preference;
use Auth;

class DataTable extends BaseDataTable
{
    public $prms;
    public $preference;

    /*
    * DataTable Construct
    *
    * @return void
    */
    public function __construct()
    {
        $this->prms = Permission::getAuthUserPermission(optional(Auth::user())->id);
        $this->preference = Preference::getAll()->pluck('value', 'field')->toArray();
    }

    /*
    * Has Permission
    *
    * @param array $permissions
    * @return bool
    */
    public function hasPermission(array $permissions) :bool
    {
        return (array_intersect($permissions, $this->prms)) ? true : false;
    }
}
