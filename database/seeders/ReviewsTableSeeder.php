<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('reviews')->delete();

        \DB::table('reviews')->insert(array (
            0 =>
            array (
                'id' => 1,
                'comments' => 'Good Product',
                'rating' => 3,
                'reviewed_by' => NULL,
                'user_id' => 2,
                'product_id' => 1141,
                'is_public' => 1,
                'status' => 'Active',
            ),
            1 =>
            array (
                'id' => 2,
                'comments' => 'Good phone',
                'rating' => 3,
                'reviewed_by' => NULL,
                'user_id' => 2,
                'product_id' => 1142,
                'is_public' => 1,
                'status' => 'Active',
            ),
            2 =>
            array (
                'id' => 3,
                'comments' => 'I love this phone',
                'rating' => 5,
                'reviewed_by' => NULL,
                'user_id' => 2,
                'product_id' => 1143,
                'is_public' => 1,
                'status' => 'Active',
            ),
        ));

        Review::insert(Review::factory()->definition());
    }
}
