<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSubscriptionInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscription_invoice_items', function (Blueprint $table) {
            $table->foreign(['invoice_id'])->references(['id'])->on('subscription_invoices')->onUpdate('NO ACTION')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subscription_invoice_products', function (Blueprint $table) {
            $table->dropForeign('subscription_invoice_products_invoice_id_foreign');
        });
    }
}
