<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->decimal('delivery_charges',8,2);
            $table->decimal('gst',8,2);
            $table->decimal('pst',8,2);
            $table->decimal('vat',8,2);
            $table->string('order_status');
            $table->decimal('total',8,2);
            $table->decimal('subtotal',8,2);
            $table->longText('billing_address');
            $table->longText('shipping_address');
            $table->string('auth_code');
            $table->string('transaction_status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
