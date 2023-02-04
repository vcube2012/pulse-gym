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
        Schema::create('smartfits', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->index();
            $table->text('name');
            $table->text('top_title');
            $table->text('text');
            $table->string('title');
            $table->text('sub_title');
            $table->text('description');
            $table->text('features');
            $table->string('image');
            $table->text('address');
            $table->text('lat')->nullable();
            $table->text('lng')->nullable();
            $table->json('phone')->nullable();
            $table->string('scheduler')->nullable();
            $table->timestamps();
        });

        Schema::create('coach_smartfit', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Coach::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Smartfit::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smartfits');
        Schema::dropIfExists('coach_smartfit');

    }
};
