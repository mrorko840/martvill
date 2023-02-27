<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_coupons', function (Blueprint $table) {
            $table->foreign(['product_id'])->references(['id'])->on('products')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['coupon_id'])->references(['id'])->on('coupons')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_coupons', function (Blueprint $table) {
            $table->dropForeign('product_coupons_product_id_foreign');
            $table->dropForeign('product_coupons_coupon_id_foreign');
        });
    }
}
