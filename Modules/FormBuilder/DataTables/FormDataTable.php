<?php

/**
 * @package FormDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Muhammad AR Zihad <[zihad.techvill@gmail.com]>
 * @created 21-03-2022
 */

namespace Modules\FormBuilder\DataTables;

use App\DataTables\DataTable;
use Modules\FormBuilder\Entities\Form;

class FormDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $form = $this->query();
        return datatables()
            ->of($form)
            ->editColumn('name', function ($form) {
                return '<a href="' .  route('formbuilder::forms.edit', $form->id) . '">' . $form->name . '</a>';
            })->editColumn('visibility', function ($form) {
                return statusBadges($form->visibility);
            })->editColumn('type', function ($form) {
                return \Str::title(str_replace('_', ' ', $form->type));
            })->editColumn('allows_edit', function ($form) {
                return statusBadges($form->allowsEdit() ? __('Yes') : __('No'));
            })->addColumn('submissions_count', function ($form) {
                return $form->submissions_count;
            })->addColumn('action', function ($form) {

                $edit = '<a title="' . __('Edit :x', ['x' => __('Form')]) . '" href="' . route('formbuilder::forms.edit', ['form' => $form->id]) . '" class="btn btn-xs btn-primary"><i class="feather icon-edit"></i></a>&nbsp';

                $delete = '<form method="post"
                            action="' . route('formbuilder::forms.destroy', ['form' => $form->id]) . '"
                            id="delete-form-' . $form->id . '" accept-charset="UTF-8"
                            class="display_inline">
                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '
                            <button title="' . __('Delete :x', ['x' => __('Form')]) . '" class="btn btn-xs btn-danger"
                                type="button"
                                data-form="delete-form-' . $form->id . '"
                                data-id=' . $form->id . '
                                data-title="' . __('Delete :x', ['x' => __('Form')]) . '"
                                data-delete="form" data-label="' . __('Delete') . '"
                                data-bs-toggle="modal" data-bs-target="#confirmDelete"
                                data-message="' . __('Are you sure to delete this?') . '">
                                <i class="feather icon-trash-2"></i>
                            </button>
                        </form>';

                $data = '<a href="' . route("formbuilder::submissions.index", ['fid' => $form->id]) . '"
                            class="btn btn-xs btn-primary me-2"
                            title="' . __("View submissions for :x", ['x' => $form->name]) . '">
                                <i class="fa fa-th-list"></i></a>';

                $copy = '<button class="btn btn-info btn-xs me-2 clipboard"
                                                        data-clipboard-text="' . route("formbuilder::form.render", $form->identifier) . '"
                                                        data-message="" data-original="" title="' . __("Copy form URL to clipboard") . '">
                                                        <i class="fa fa-clipboard"></i>
                                                    </button>';

                $show = '<a href="' . route("formbuilder::forms.show", $form) . '"
                                                        class="btn btn-info btn-xs me-2"
                                                        title="' . __("Preview form :x", ["x" => $form->name]) . '">
                                                        <i class="fa fa-eye"></i></a>';

                return $data . $show . $copy . $edit . $delete;
            })
            ->rawColumns(['name', 'visibility', 'action', 'allows_edit'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $forms = Form::notKyc()->withCount('submissions');

        if (isset(request('search')['value'])) {
            $keyword = xss_clean(request('search')['value']);
            if (!empty($keyword)) {
                $forms->where('name', 'like', '%' . $keyword . '%');
            }
        }

        return $this->applyScopes($forms->filter());
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
            ->addColumn(['data' => 'visibility', 'name' => 'visibility', 'title' => __('Visibility')])
            ->addColumn(['data' => 'type', 'name' => 'type', 'title' => __('Type')])
            ->addColumn(['data' => 'allows_edit', 'name' => 'allows_edit', 'title' => __('Allow Edit')])
            ->addColumn(['data' => 'submissions_count', 'name' => 'submissions_count', 'title' => __('Submissions')])
            ->addColumn([
                'data' => 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '20%',
                'orderable' => false, 'searchable' => false
            ])
            ->parameters(dataTableOptions());
    }
}
