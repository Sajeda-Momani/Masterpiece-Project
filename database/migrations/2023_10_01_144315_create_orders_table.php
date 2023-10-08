<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('address_id');
            $table->unsignedBigInteger('coupon_id')->nullable();
            $table->timestamp('order_date');
            $table->decimal('total_price', 10, 2);
            $table->string('status');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('address_id')->references('id')->on('addresses')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('coupon_id')->references('id')->on('coupons')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};