<?php

namespace Modules\Ticket\Database\Seeders;

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('threads')->delete();

        \DB::table('threads')->insert(array(
            0 =>
            array(
                'id' => 1,
                'receiver_id' => 15,
                'email' => 'henry012045@gmail.com',
                'name' => 'Henry William',
                'thread_type' => 'TICKET',
                'department_id' => 1,
                'priority_id' => 2,
                'thread_status_id' => 6,
                'thread_key' => '',
                'subject' => 'Pellentesque in ipsum id orci porta dapibus.',
                'sender_id' => 15,
                'date' => randomDateBetween(-30, -50),
                'project_id' => NULL,
                'last_reply' => now(),
                'assigned_member_id' => 1,
            ),
            1 =>
            array(
                'id' => 2,
                'receiver_id' => 18,
                'email' => 'daniel012045@gmail.com',
                'name' => 'Daniel William',
                'thread_type' => 'TICKET',
                'department_id' => 3,
                'priority_id' => 1,
                'thread_status_id' => 6,
                'thread_key' => '',
                'subject' => 'Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.',
                'sender_id' => 18,
                'date' => randomDateBetween(-30, -50),
                'project_id' => NULL,
                'last_reply' => now(),
                'assigned_member_id' => 1,
            ),
            2 =>
            array(
                'id' => 3,
                'receiver_id' => 17,
                'email' => 'mason012045@gmail.com',
                'name' => 'Mason William',
                'thread_type' => 'TICKET',
                'department_id' => 1,
                'priority_id' => 3,
                'thread_status_id' => 6,
                'thread_key' => '',
                'subject' => 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.',
                'sender_id' => 17,
                'date' => randomDateBetween(-30, -50),
                'project_id' => NULL,
                'last_reply' => now(),
                'assigned_member_id' => 1,
            ),
            3 =>
            array(
                'id' => 4,
                'receiver_id' => 19,
                'email' => 'micheal012045@gmail.com',
                'name' => 'Micheal William',
                'thread_type' => 'TICKET',
                'department_id' => 1,
                'priority_id' => 3,
                'thread_status_id' => 6,
                'thread_key' => 'THRD-63b2660a1e4ce',
                'subject' => 'Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'sender_id' => 1,
                'date' => randomDateBetween(-30, -50),
                'project_id' => NULL,
                'last_reply' => now(),
                'assigned_member_id' => 1,
            ),
        ));
    }
}
