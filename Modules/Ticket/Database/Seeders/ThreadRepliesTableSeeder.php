<?php

namespace Modules\Ticket\Database\Seeders;

use Illuminate\Database\Seeder;

class ThreadRepliesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('thread_replies')->delete();

        \DB::table('thread_replies')->insert(array(
            0 =>
            array(
                'id' => 1,
                'thread_id' => 1,
                'sender_id' => 15,
                'receiver_id' => NULL,
                'date' => randomDateBetween(-25, -30),
                'message' => 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            1 =>
            array(
                'id' => 2,
                'thread_id' => 1,
                'sender_id' => NULL,
                'receiver_id' => 1,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            2 =>
            array(
                'id' => 3,
                'thread_id' => 1,
                'sender_id' => 15,
                'receiver_id' => NULL,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Curabitur aliquet quam id dui posuere blandit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla quis lorem ut libero malesuada feugiat.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            3 =>
            array(
                'id' => 4,
                'thread_id' => 1,
                'sender_id' => NULL,
                'receiver_id' => 1,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            4 =>
            array(
                'id' => 5,
                'thread_id' => 1,
                'sender_id' => NULL,
                'receiver_id' => 1,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            5 =>
            array(
                'id' => 6,
                'thread_id' => 2,
                'sender_id' => 18,
                'receiver_id' => NULL,
                'date' => randomDateBetween(-25, -30),
                'message' => 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            6 =>
            array(
                'id' => 7,
                'thread_id' => 2,
                'sender_id' => NULL,
                'receiver_id' => 1,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            7 =>
            array(
                'id' => 8,
                'thread_id' => 2,
                'sender_id' => 18,
                'receiver_id' => NULL,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            8 =>
            array(
                'id' => 9,
                'thread_id' => 2,
                'sender_id' => NULL,
                'receiver_id' => 1,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            9 =>
            array(
                'id' => 10,
                'thread_id' => 2,
                'sender_id' => 18,
                'receiver_id' => NULL,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            10 =>
            array(
                'id' => 11,
                'thread_id' => 2,
                'sender_id' => NULL,
                'receiver_id' => 1,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ultricies ligula sed magna dictum porta. Donec sollicitudin molestie malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            11 =>
            array(
                'id' => 12,
                'thread_id' => 2,
                'sender_id' => 18,
                'receiver_id' => NULL,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            12 =>
            array(
                'id' => 13,
                'thread_id' => 3,
                'sender_id' => 17,
                'receiver_id' => NULL,
                'date' => randomDateBetween(-25, -30),
                'message' => 'Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus.',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            13 =>
            array(
                'id' => 14,
                'thread_id' => 3,
                'sender_id' => NULL,
                'receiver_id' => 1,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Donec sollicitudin molestie malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            14 =>
            array(
                'id' => 15,
                'thread_id' => 3,
                'sender_id' => 17,
                'receiver_id' => NULL,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Pellentesque in ipsum id orci porta dapibus.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            15 =>
            array(
                'id' => 16,
                'thread_id' => 4,
                'sender_id' => NULL,
                'receiver_id' => 1,
                'date' => randomDateBetween(-25, -30),
                'message' => '<font color="#888888" face="Open Sans, sans-serif">Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus.</font>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            16 =>
            array(
                'id' => 17,
                'thread_id' => 4,
                'sender_id' => 19,
                'receiver_id' => NULL,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            17 =>
            array(
                'id' => 18,
                'thread_id' => 4,
                'sender_id' => NULL,
                'receiver_id' => 1,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
            18 =>
            array(
                'id' => 19,
                'thread_id' => 4,
                'sender_id' => 19,
                'receiver_id' => NULL,
                'date' => randomDateBetween(-25, -30),
                'message' => '<p>Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus. Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.<br></p>',
                'has_attachment' => 0,
                'is_read' => 0,
            ),
        ));
    }
}
