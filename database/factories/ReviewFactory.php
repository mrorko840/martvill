<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    private $reviewStart = 2;
    private $reviewEnd = 5;
    private $reviewUserIds = [];
    private $userIds = [];

    /**
     * Define random digit starting and ending point.
     *
     * @param int $start
     * @param int $end
     * @return object $this
     */
    public function setPoint($start, $end)
    {
        $this->reviewStart = $start;
        $this->reviewEnd = $end;
        return $this;
    }

    /**
     * Find unique user id for a product.
     *
     * @return int $userId
     */
    public function uniqueUserId()
    {
        $userId = $this->faker->randomElement($this->userIds);
        if (in_array($userId, $this->reviewUserIds)) {
            return $this->uniqueUserId();
        }

        $this->reviewUserIds[] = $userId;
        return $userId;
    }

    /**
     * Define the model's default state.
     *
     * @return array $reviewData
     */
    public function definition()
    {
        $productIds = Product::select('id')->where('status', 'Published')->whereNotNull('slug')->get()->pluck('id');
        $this->userIds = User::select('id')->get()->pluck('id');
        $status = ['Active', 'Active', 'Inactive', 'Active', 'Active'];
        $reviewData = [];

        if (count($this->userIds) < $this->reviewEnd) {
            $this->reviewEnd = count($this->userIds);
        }

        foreach ($productIds as $id) {
            for ($i = 1; $i <= mt_rand($this->reviewStart, $this->reviewEnd); $i++) {
                $reviewData[] = [
                    'comments' => $this->faker->text(mt_rand(20, 100)),
                    'rating' => $this->faker->numberBetween(1, 5),
                    'reviewed_by' => NULL,
                    'user_id' => $this->uniqueUserId(),
                    'product_id' => $id,
                    'is_public' => 1,
                    'status' => $status[mt_rand(0, 4)],
                    'created_at' => randomDateBefore(30)
                ];
            }
            $this->reviewUserIds = [];
        }
        return $reviewData;
    }



    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'updated_at' => null,
            ];
        });
    }
}
