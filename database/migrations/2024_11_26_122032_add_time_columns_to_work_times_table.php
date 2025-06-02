<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimeColumnsToWorkTimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('work_times', function (Blueprint $table) {
            $table->time('to_morning')->after('time')->nullable();
            $table->time('afternoon_time')->after('to_morning')->nullable();
            $table->time('to_afternoon')->after('afternoon_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('work_times', function (Blueprint $table) {
            $table->dropColumn(['to_morning', 'afternoon_time', 'to_afternoon']);
        });
    }
}