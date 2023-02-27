<?php

/**
 * @package AdminSupportDataTable
 * @author tehcvillage <support@techvill.org>
 * @contributor Kabir Ahmed <[kabir.techvill@gmail.com]>
 * @created 05-06-2022
 */

namespace Modules\Ticket\DataTables;

use App\DataTables\DataTable;
use Modules\Ticket\Http\Models\ThreadStatus;
use Modules\Ticket\Http\Models\Thread;

class AdminSupportDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax()
    {
        $tickets = $this->query();
        return datatables()
            ->of($tickets)
            ->addColumn('id', function ($tickets) {
                return "<a href='" . route('admin.threadReply', ['id' => base64_encode($tickets->id)]) . "'>" . $tickets->id . "</a>";
            })
            ->editColumn('subject', function ($tickets) {
                $priority = '<span class="badge priority-style" id="' . strtolower(optional($tickets->priority)->name) . '-priority">' . optional($tickets->priority)->name . '</span>';
                $id = "<a href='" . route('admin.threadReply', ['id' => base64_encode($tickets->id)]) . "'>" . $tickets->subject . "</a>";

                return $id . '<br>' . $priority;
            })
            ->editColumn('assignee', function ($tickets) {
                return optional($tickets->assignedMember)->name;
            })
            ->addColumn('status', function ($tickets) {
                $allstatus = '';
                $ticketStatus = ThreadStatus::where('id', '!=', $tickets->thread_status_id)->get();
                foreach ($ticketStatus as $key => $value) {
                    $allstatus .= '<li class="properties"><a class="admin_ticket_status_change f-14 class_black" ticket_id="' . $tickets->id . '" data-id="' . $value->id . '" data-value="' . $value->name . '">' . $value->name . '</a></li>';
                }
                $top = '<div class="btn-group">
                <button style="color:' . optional($tickets->threadStatus)->color . ' !important" type="button" class="badge text-white f-12 dropdown-toggle task-status-name" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                ' . optional($tickets->threadStatus)->name . '&nbsp;<span class="caret"></span>
                </button>
                <ul class="dropdown-menu scrollable-menu task-priority-name w-150p" role="menu">';
                $last = '</ul></div>&nbsp';

                return $top . $allstatus . $last;
            })
            ->addColumn('department', function ($tickets) {
                return optional($tickets->department)->name;
            })

            ->addColumn('last_reply', function ($tickets) {
                return $tickets->last_reply && $tickets->last_reply != $tickets->date ?  timeZoneFormatDate($tickets->last_reply) . "<br />" . timeZoneGetTime($tickets->last_reply)  :  __('Not Replied Yet');
            })
            ->addColumn('date', function ($tickets) {
                return $tickets->date ?  timeZoneFormatDate($tickets->date) . "<br />" . timeZoneGetTime($tickets->date)  :  __('Created At');
            })
            ->addColumn('name', function ($tickets) {
                return '<a href="' . route('users.edit', ['id' => $tickets->receiver_id]) . '">' . wrapIt($tickets->receiver->name, 10) . '</a>';
            })

            ->addColumn('action', function ($tickets) {
                $edit = '<a title="' . __('Edit :?', ['?' => __('Ticket')]) . '" href="' . route('admin.threadEdit', ['id' => $tickets->id]) . '" class="btn btn-xs btn-primary"><i class="feather icon-edit"></i></a>&nbsp';

                $delete = '<form method="post" action="' . route('admin.ticketDelete', ['id' => $tickets->id]) . '" id="delete-ticket-' . $tickets->id . '" accept-charset="UTF-8" class="display_inline">
                        ' . csrf_field() . '
                        <button title="' . __('Delete') . '" class="btn btn-xs btn-danger confirm-delete" type="button" data-id=' . $tickets->id . ' data-delete="ticket" data-label="Delete" data-bs-toggle="modal" data-bs-target="#confirmDelete" data-title="' . __('Delete :?', ['?' => __('Ticket')]) . '" data-message="' . __('Are you sure to delete this?') . '">
                        <i class="feather icon-trash-2"></i>
                        </button>
                        </form>';

                $str = '';
                if ($this->hasPermission(['Modules\Ticket\Http\Controllers\TicketController@edit'])) {
                    $str .= $edit;
                }
                if ($this->hasPermission(['Modules\Ticket\Http\Controllers\TicketController@delete'])) {
                    $str .= $delete;
                }
                return $str;
            })

            ->rawColumns(['action', 'id', 'subject', 'assignee', 'status', 'last_reply', 'date', 'name', 'department', 'priority_name'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        $threads = Thread::with(['department', 'vendor', 'assignedMember'])
            ->when(request()->thread_status == 'open', function($query) {
                return $query->whereHas('threadStatus', function($q) {
                    $q->where('name', 'Open');
                });
            })->filter();

        return $this->applyScopes($threads);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()

            ->addColumn(['data' => 'id', 'name' => 'id', 'title' => __('#'), 'visible' => false])
            ->addColumn(['data' => 'last_reply', 'name' => 'last_reply', 'visible' => false])
            ->addColumn(['data' => 'subject', 'name' => 'subject', 'title' => __('Subject')])
            ->addColumn(['data' => 'assignee', 'name' => 'assignedMember.name', 'title' => __('Assignee')])
            ->addColumn(['data' => 'department', 'name' => 'department.name', 'title' => __('Department')])
            ->addColumn(['data' => 'name', 'name' => 'vendor.name', 'title' => __('Vendor')])
            ->addColumn(['data' => 'last_reply', 'name' => 'last_reply', 'title' => __('Last reply')])
            ->addColumn(['data' => 'date', 'name' => 'date', 'title' => __('Created at')])
            ->addColumn(['data' => 'status', 'name' => 'name', 'title' => __('Status'), 'orderable' => false, 'searchable' => false])
            ->addColumn([
                'data' => 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '5%',
                'visible' => $this->hasPermission(['Modules\Ticket\Http\Controllers\TicketController@edit', 'Modules\Ticket\Http\Controllers\TicketController@delete']),
                'orderable' => false, 'searchable' => false
            ])

            ->parameters(dataTableOptions());
    }
}
