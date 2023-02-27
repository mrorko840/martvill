<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_invoice_items', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->bigInteger('invoice_id')->nullable()->index();
            $table->string('name')->nullable();
            $table->string('period')->nullable();
            $table->string('object_type', 45)->nullable()->index();
            $table->bigInteger('object_id')->nullable()->index();
            $table->decimal('price', 18, 8)->nullable();
            $table->tinyInteger('quantity')->nullable();
            $table->decimal('amount', 16, 8)->nullable();
            $table->decimal('discount', 16, 8)->nullable();
            $table->decimal('tax_amount', 16, 8)->nullable();
            $table->decimal('total', 16, 8)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_invoice_products');
    }
}
