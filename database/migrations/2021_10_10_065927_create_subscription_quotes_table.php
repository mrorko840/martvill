<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscription_quotes', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->date('quote_date')->nullable()->index();
            $table->date('due_date')->nullable();
            $table->string('object_type', 45)->nullable()->index();
            $table->bigInteger('object_id')->nullable()->index();
            $table->string('description')->nullable();
            $table->string('billing_name', 100)->nullable();
            $table->string('billing_email', 100)->nullable();
            $table->string('billing_address', 100)->nullable();
            $table->string('billing_address_2', 100)->nullable();
            $table->string('billing_city', 100)->nullable();
            $table->string('billing_zip', 45)->nullable();
            $table->string('billing_state', 100)->nullable();
            $table->string('billing_country', 45)->nullable();
            $table->string('billing_phone', 45)->nullable();
            $table->decimal('amount', 16, 8)->nullable();
            $table->string('currency', 45)->default('USD');
            $table->bigInteger('vendor_id')->nullable()->index();
            $table->bigInteger('user_id')->nullable()->index();
            $table->text('notes')->nullable();
            $table->integer('is_resolved')->nullable()->default(0)->index();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscription_quotes');
    }
}
