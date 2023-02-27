<?php

/**
 * @package FormDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 21-03-2022
 */

namespace Modules\FormBuilder\DataTables;

use App\DataTables\DataTable;
use Modules\FormBuilder\Entities\Submission;

class SubmissionDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $sub = $this->query();
        return datatables()
            ->of($sub)

            ->editColumn('username', function ($sub) {
                if ($sub->username) {
                    return $sub->username;
                }
                return __('Public');
            })->editColumn('formname', function ($sub) {
                return ucfirst($sub->formname);
            })->addColumn('form_submissions.updated_at', function ($sub) {
                return $sub->format_updated_at;
            })->addColumn('form_submissions.created_at', function ($sub) {
                return $sub->format_created_at;
            })->addColumn('action', function ($sub) {
                $edit = '<a title="' . __('Edit :x', ['x' => __('Submission')]) . '" href="' . route('formbuilder::entry.edit', [$sub->id]) . '" class="btn btn-xs btn-primary"><i class="feather icon-edit" aria-hidden="true"></i></a>&nbsp';

                $delete = '<form method="post"
                        action="' . route('formbuilder::entry.destroy', ['entry' => $sub->id]) . '"
                        id="delete-submission-' . $sub->id . '" accept-charset="UTF-8"
                        class="display_inline">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button title="' . __('Delete :x', ['x' => __('Submission')]) . '" class="btn btn-xs btn-danger confirm-delete"
                            type="button"
                            data-form="delete-submission-' . $sub->id . '"
                            data-id=' . $sub->id . '
                            data-title="' . __('Delete :x', ['x' => __('Submission')]) . '"
                            data-delete="submission" data-label="' . __('Delete') . '"
                            data-bs-toggle="modal" data-bs-target="#confirmDelete"
                            data-message="' . __('Are you sure to delete this?') . '">
                            <i class="feather icon-trash-2"></i>
                        </button>
                    </form>';

                $view = '<a href="' . route("formbuilder::entry.show", [$sub->id])  . '"
                            class="btn btn-primary btn-xs me-2" title="View submission">
                            <i class="fa fa-eye"></i>
                         </a>';

                return $view . $edit . $delete;
            })

            ->rawColumns(['name', 'visibility', 'action', 'edit_allow'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $subs = Submission::leftJoin('users', 'users.id', 'form_submissions.user_id')
            ->leftJoin('forms', 'forms.id', 'form_submissions.form_id')
            ->where('forms.type', '!=', 'kyc')
            ->selectRaw('form_submissions.id as id, users.name as username, forms.name as formname, form_submissions.created_at, form_submissions.updated_at');
        if (isset(request('search')['value'])) {
            $keyword = xss_clean(request('search')['value']);
            if (!empty($keyword)) {
                $subs->whereHas('user', function ($q) use ($keyword) {
                    $q->where('name', 'like', '%' . $keyword . '%');
                })->orWhereHas('form', function ($q) use ($keyword) {
                    $q->where('name', 'like', '%' . $keyword . '%');
                });
            }
        }

        return $this->applyScopes($subs->filter());
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'username', 'name' => 'users.name', 'title' => __('Name')])
            ->addColumn(['data' => 'formname', 'name' => 'forms.name', 'title' => __('Form')])
            ->addColumn(['data' => 'form_submissions.updated_at', 'name' => 'form_submissions.updated_at', 'title' => __('Updated On')])
            ->addColumn(['data' => 'form_submissions.created_at', 'name' => 'form_submissions.created_at', 'title' => __('Created On')])
            ->addColumn([
                'data' => 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '15%',
                'orderable' => false, 'searchable' => false
            ])
            ->parameters(dataTableOptions());
    }
}
