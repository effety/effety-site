<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhoneRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_records', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('patient_id');
            $table->foreignId('member_id'); 
            $table->string('call_id')->unique(); 
            $table->time('call_duration');
            $table->dateTime('start_call'); 
            $table->dateTime('end_call'); 
            $table->date('call_date');
            $table->decimal('price', 10, 2); 
            $table->enum('status', ['pending', 'completed', 'cancelled']); 
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
        Schema::dropIfExists('phone_records');
    }
}

