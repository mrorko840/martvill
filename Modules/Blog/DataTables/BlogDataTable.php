<?php
/**
 * @package BlogDataTable
 * @author TechVillage <support@techvill.org>
 * @contributor Kabir Ahmed <[kabir.techvill@gmail.com]>
 * @created 27-12-2021
 */

namespace Modules\Blog\DataTables;

use App\DataTables\DataTable;
use Modules\Blog\Http\Models\Blog;

class BlogDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $blog = $this->query();
        return datatables()
            ->of($blog)

            ->addColumn('image', function ($blog) {
                return '<img src="' . $blog->fileUrl(['id' => $blog->id]) . '" alt="' . __('image') . '" class ="data-table-image">';
            })->editColumn('title', function ($blog) {
                $html = '<div class="meta-info-parent">
                <a href="' . route('blog.details', ['slug' => $blog->slug]) . '" title="' . $blog->title . '">' . $blog->title . '</a>' .
                '<span class="d-block info-meta">';
                return $html;
            })->addColumn('category', function ($blog) {
                return wrapIt(optional($blog->blogCategory)->name, 10,  ['columns' => 3,'trim' => true]);
            })->editColumn('author', function ($blog) {
                return wrapIt(optional($blog->user)->name, 10,  ['columns' => 3,'trim' => true]);
            })->editColumn('status', function ($blog) {
                return statusBadges(lcfirst($blog->status));
            })->editColumn('created_at', function ($blog) {
                return $blog->format_created_at;
            })->addColumn('action', function ($blog) {
                $show = '<a title="' . __('Show') . '" href="' . route('blog.details', ['slug' => $blog->slug]) . '" class="btn btn-xs btn-outline-dark"><i class="feather icon-eye"></i></a>&nbsp';
                $edit = '<a title="' . __('Edit :x', ['x' => __('Blog')]) . '" href="' . route('blog.edit', ['id' => $blog->id]) . '" class="btn btn-xs btn-primary"><i class="feather icon-edit"></i></a>&nbsp';

                $delete = '<form method="post" action="' . route('blog.delete', ['id' => $blog->id]) . '" id="delete-Blog-'. $blog->id . '" accept-charset="UTF-8" class="display_inline">
                        ' . csrf_field() . '
                        <button title="' . __('Delete :x', ['x' => __('Blog')]) . '" class="btn btn-xs btn-danger confirm-delete" type="button" data-id=' . $blog->id . ' data-label="Delete" data-delete="Blog" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :x', ['x' => __('Blog')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        <i class="feather icon-trash-2"></i>
                        </button>
                        </form>';
                $str = '';
                if ($blog->status == 'Active') {
                    $str .= $show;
                }
                if ($this->hasPermission(['Modules\Blog\Http\Controllers\BlogController@edit'])) {
                    $str .= $edit;
                }
                if ($this->hasPermission(['Modules\Blog\Http\Controllers\BlogController@delete'])) {
                    $str .= $delete;
                }
                return $str;
            })

            ->rawColumns(['image', 'title', 'category', 'author', 'status', 'created_at', 'action'])
             ->filter(function ($instance){
                if (request('status') && (request('status') == 'Active' || request('status') == 'Inactive' )) {
                    $instance->where('status', request('status'));
                }

                if (request('author_id')) {
                    $instance->whereHas('user', function ($query) {
                        $query->where('id', request('author_id'));
                    });
                }
                 if (request('category_id')) {
                    $instance->whereHas('blogCategory', function ($query) {
                        $query->where('id', request('category_id'));
                    });
                }
                if (isset(request('search')['value'])) {
                    $keyword = xss_clean(request('search')['value']);
                    if (!empty($keyword)) {
                        $instance->where(function ($query) use ($keyword) {
                            $query->whereLike('title', $keyword)
                                ->orWhereLike('blogs.status', $keyword)
                                ->orWhereHas('blogCategory', function ($query) use ($keyword) {
                                    $query->whereLike('name', $keyword);
                                })
                                ->orWhereHas('user', function ($query) use ($keyword) {
                                    $query->whereLike('name', $keyword);
                                });
                        });
                    }
                }
            })
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $blogs = Blog::select('blogs.*')->with('user', 'blogCategory');
        return $this->applyScopes($blogs);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => __('Id'), 'visible' => false])
            ->addColumn(['data' => 'image', 'name' => 'image', 'title' => __('Image'), 'orderable' => false, 'searchable' => false])
            ->addColumn(['data' => 'title', 'name' => 'title', 'title' => __('Title')])
            ->addColumn(['data' => 'category', 'name' => 'blogCategory.name', 'title' => __('Category')])
            ->addColumn(['data' => 'author', 'name' => 'user.name', 'title' => __('Author')])
            ->addColumn(['data' => 'status', 'name' => 'blogs.status', 'title' => __('Status')])
            ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => __('Created At')])
            ->addColumn(['data'=> 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '10%',
            'visible' => $this->hasPermission(['Modules\Blog\Http\Controllers\BlogController@edit', 'Modules\Blog\Http\Controllers\BlogController@delete']),
            'orderable' => false, 'searchable' => false])
            ->parameters(dataTableOptions());
    }
}
