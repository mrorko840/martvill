<?php

namespace Modules\FormBuilder\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\FormBuilder\Entities\Form;

class FormSubmissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('form_submissions')->delete();

        \DB::table('form_submissions')->insert(array(
            0 =>
            array(
                'id' => 1,
                'form_id' => 1,
                'user_id' => 15,
                'content' => '{"name":"Henry William","email":"henry012045@gmail.com","number-1662968465931":"0145673426","nid":"1010123456789","date-1662968475519":"22022-09-11"}',
                'created_at' => '2022-09-12 10:07:04',
                'updated_at' => '2022-09-12 10:07:04',
            ),
            1 =>
            array(
                'id' => 2,
                'form_id' => 1,
                'user_id' => 16,
                'content' => '{"name":"Jacob William","email":"jacob012045@gmail.com","number-1662968465931":"0191634257","nid":"151523457893","date-1662968475519":"2022-05-12"}',
                'created_at' => '2022-09-12 10:13:23',
                'updated_at' => '2022-09-12 10:13:23',
            ),
            2 =>
            array(
                'id' => 3,
                'form_id' => 1,
                'user_id' => 17,
                'content' => '{"name":"Mason Wiliam","email":"mason012045@gmail.com","number-1662968465931":"0171223454","nid":"123456789987766","date-1662968475519":"2022-06-09"}',
                'created_at' => '2022-09-12 10:20:05',
                'updated_at' => '2022-09-12 10:20:05',
            ),
            3 =>
            array(
                'id' => 4,
                'form_id' => 1,
                'user_id' => 18,
                'content' => '{"name":"Daniel William","email":"daniel012045@gmail.com","number-1662968465931":"0151234567","nid":"1245356457644","date-1662968475519":"2022-04-07"}',
                'created_at' => '2022-09-12 10:26:35',
                'updated_at' => '2022-09-12 10:26:35',
            ),
            4 =>
            array(
                'id' => 5,
                'form_id' => 1,
                'user_id' => 19,
                'content' => '{"name":"Micheal William","email":"micheal012045@gmail.com","number-1662968465931":"09876565467","nid":"12345422455676","date-1662968475519":"2022-08-27"}',
                'created_at' => '2022-09-12 10:29:51',
                'updated_at' => '2022-09-12 10:29:51',
            ),
            5 =>
            array(
                'id' => 6,
                'form_id' => 1,
                'user_id' => 3,
                'content' => '{"name":"Jamal","email":"vendor@techvill.net","number-1662968465931":"01712345678","nid":"1241151634567","date-1662968475519":"2022-05-03"}',
                'created_at' => '2022-09-12 10:31:17',
                'updated_at' => '2022-09-12 10:31:17',
            ),
        ));
    }
}
