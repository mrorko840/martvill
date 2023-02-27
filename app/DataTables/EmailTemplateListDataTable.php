<?php
/**
 * @package EmailTemplateListDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Sabbir Al-Razi <[sabbir.techvill@gmail.com]>
 * @contributor Al Mamun <[almamun.techvill@gmail.com]>
 * @created 20-05-2021
 * @modified 04-10-2021
 */

namespace App\DataTables;

use App\DataTables\DataTable;
use App\Models\{
    EmailTemplate
};

class EmailTemplateListDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $templates = $this->query();
        return datatables()
            ->of($templates)

            ->addColumn('name', function ($templates) {
                return isset($templates->name) ? "<a href='". route('emailTemplates.edit', ['id' => $templates->id]) ."'>" . $templates->name . "</a>": '';
            })

            ->addColumn('created_at', function ($brands) {
                return $brands->format_created_at;
            })

            ->addColumn('status', function ($templates) {
                return statusBadges(lcfirst($templates->status));
            })

            ->addColumn('action', function ($templates) {
                $edit = '<a title="' . __('Edit') . '" href="'. route('emailTemplates.edit', ['id' => $templates->id]) .'" class="btn btn-xs btn-primary"><i class="feather icon-edit"></i></a>&nbsp;';

                $delete = '<form method="post" action="'. route('emailTemplates.destroy', ['id' => $templates->id]) .'" id="delete-email-template-'. $templates->id .'" accept-charset="UTF-8" class="display_inline">
                        '.csrf_field().'
                        <button title="' . __('Delete') . '" class="btn btn-xs btn-danger confirm-delete" type="button" data-id=' . $templates->id . ' data-label="Delete" data-delete="email-template" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :x', ['x' => __('Template')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        <i class="feather icon-trash-2"></i>
                        </button>
                        </form>';

                $str = '';
                if ($this->hasPermission(['App\Http\Controllers\MailTemplateController@edit'])) {
                    $str .= $edit;
                }
                if ($this->hasPermission(['App\Http\Controllers\MailTemplateController@destroy']) && false) {
                    $str .= $delete;
                }
                return $str;
            })

            ->rawColumns(['name', 'subject', 'status', 'slug', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $templates = EmailTemplate::getAll()->whereNull('parent_id');
        return $this->applyScopes($templates);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()

        ->addColumn(['data' => 'name', 'name' => 'name', 'title' => __('Name')])

        ->addColumn(['data' => 'slug', 'name' => 'slug', 'title' => __('Slug')])

        ->addColumn(['data' => 'subject', 'name' => 'subject', 'title' => __('Subject')])

        ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status')])

        ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => __('Created at')])

        ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '5%',
        'visible' => $this->hasPermission(['App\Http\Controllers\MailTemplateController@edit', 'App\Http\Controllers\MailTemplateController@destroy']),
        'orderable' => false, 'searchable' => false])

        ->parameters(dataTableOptions());
    }
}
