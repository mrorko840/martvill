<?php
/**
 * @package CustomerSupportListDataTable
 * @author tehcvillage <support@techvill.org>
 * @contributor Kabir Ahmed <[kabir.techvill@gmail.com]>
 * @created 07-16-2022
 */

namespace Modules\Ticket\DataTables;

use App\DataTables\DataTable;
use Modules\Ticket\Http\Models\ThreadStatus;

class SupportDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $threadData = $this->query();
        return datatables()
            ->of($threadData)

            ->addColumn('id', function ($threadData) {
                return '<a href='. route('vendor.threadReply', ['id' => base64_encode($threadData->id)]) .'>'. $threadData->id .'</a>';
            })

            ->editColumn('department', function ($threadData) {
                return optional($threadData->department)->name;
            })
            ->addColumn('thread_status', function ($threadData) {
                    $allstatus = '';
                    if ($threadData->threadStatus->name != 'Complete' ) {
                        $ticketStatus = ThreadStatus::where('name', '!=', optional($threadData->threadStatus)->name)->get();
                    }
                    if (!empty($ticketStatus)) {
                        foreach ($ticketStatus as $key => $value) {
                            $allstatus .= '<li class="properties"><a class="ticket_status_change f-14 color_black" ticket_id="'. $threadData->id .'" data-id="'. $value->id .'" data-value="'. $value->name .'">'. $value->name .'</a></li>';
                        }
                        $top = '<div class="btn-group">
                        <button style="color:'. optional($threadData->threadStatus)->color .' !important" type="button" class="badge text-white f-12 dropdown-toggle task-status-name" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        '. optional($threadData->threadStatus)->name .'&nbsp;<span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu scrollable-menu w-150p task-priority-name" role="menu">';
                    } else {
                        $top = '<div class="btn-group">
                        <button style="color:'. optional($threadData->threadStatus)->color .' !important" type="button" class="badge text-white f-12 task-status-name" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        '. optional($threadData->threadStatus)->name .'&nbsp;<span class="caret"></span>
                        </button>';
                    }
                    $last = '</ul></div>&nbsp';

                    if (optional($threadData->threadStatus)->name == 'Complete') {
                        return '<div class="btn-group">
                        <button style="color:'. optional($threadData->threadStatus)->color .' !important" type="button" class="badge text-white f-12 task-status-name">
                        '. optional($threadData->threadStatus)->name .'&nbsp;<span class="caret"></span>
                        </button></div>&nbsp';
                    }
                    return $top . $allstatus . $last;
                })
            ->editColumn('subject', function ($threadData) {
                $priority = '<span class="ms-2 badge priority-style" id="'. strtolower(optional($threadData->priority)->name) .'-priority">' . optional($threadData->priority)->name . '</span>';
                return "<a href='". route('vendor.threadReply', ['id' => base64_encode($threadData->id)]) ."'>". $threadData->subject ."</a>". $priority;
            })
            ->addColumn('created_at', function ($threadData) {
                return $threadData->date;
            })
            ->addColumn('last_reply', function ($threadData) {
                return $threadData->last_reply;
            })

            ->rawColumns(['id', 'department', 'thread_status', 'subject', 'last_reply', 'created_at'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        return $this->applyScopes($this->threadData->with('department')->filter());
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()

            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => __('#')])
            ->addColumn(['data' => 'subject', 'name' => 'subject', 'title' => __('Subject')])
            ->addColumn(['data' => 'department', 'name' => 'department.name', 'title' => __('Department')])
            ->addColumn(['data' => 'thread_status', 'name' => 'name', 'title' => __('Status')])
            ->addColumn(['data' => 'last_reply', 'name' => 'last_reply', 'title' => __('Last reply')])
            ->addColumn(['data' => 'created_at', 'name' => 'created_at', 'title' => __('Created at')])
            ->parameters(dataTableOptions());
    }

}
