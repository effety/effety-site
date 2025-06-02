<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToSurveysTable extends Migration
{
    public function up()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->string('status')->after('category_id')->default('active'); // Correct column name without space
        });
    }

    public function down()
    {
        Schema::table('surveys', function (Blueprint $table) {
            $table->dropColumn('status'); // Remove 'status' column
        });
    }
}
