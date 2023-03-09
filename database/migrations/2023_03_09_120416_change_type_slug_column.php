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
        Schema::table('clubs', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('clubs', function (Blueprint $table) {
            $table->json('slug')->nullable();
        });

        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('blogs', function (Blueprint $table) {
            $table->json('slug')->nullable();
        });

        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->json('slug')->nullable();
        });

        Schema::table('smartfits', function (Blueprint $table) {
            $table->dropColumn('slug');
        });
        Schema::table('smartfits', function (Blueprint $table) {
            $table->json('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
};
