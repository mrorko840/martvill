<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CategoryTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // -- trigger on after delete product category
        \DB::unprepared('
            CREATE TRIGGER `product_categories_ADEL` AFTER DELETE ON `product_categories`
            FOR EACH ROW UPDATE categories SET product_counts = (select count(product_id) from product_categories WHERE category_id = categories.id) WHERE categories.id = OLD.category_id
        ');

        // -- trigger on after insert product category
        \DB::unprepared('
            CREATE TRIGGER `product_categories_AINS` AFTER INSERT ON `product_categories`
            FOR EACH ROW UPDATE categories SET product_counts = (select count(product_id) from product_categories WHERE category_id = categories.id) WHERE categories.id = NEW.category_id
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        \DB::unprepared('DROP TRIGGER `product_categories_ADEL`');
        \DB::unprepared('DROP TRIGGER `product_categories_AINS`');
    }
}
