<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('number')->nullable();
            $table->enum('card_type', ['giftcard', 'coupon']);
            $table->string('payment_type');
            $table->decimal('price', 10, 2);
            $table->decimal('discount', 10, 2);
            $table->integer('quantity')->default(0); 
            $table->string('image')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coupons');
    }
}
