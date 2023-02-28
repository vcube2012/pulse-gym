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
        Schema::table('price_categories', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('price_categories', function (Blueprint $table) {
            $table->float('order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('price_categories', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('price_categories', function (Blueprint $table) {
            $table->integer('order')->nullable();
        });
    }
};
