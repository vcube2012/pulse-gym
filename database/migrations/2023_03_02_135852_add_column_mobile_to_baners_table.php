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
        Schema::table('baners', function (Blueprint $table) {
           $table->text('mobile_title');
            $table->text('mobile_sub_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('baners', function (Blueprint $table) {
            $table->dropColumn('mobile_title');
            $table->dropColumn('mobile_sub_title');
        });
    }
};
