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
        Schema::create('coaches', function (Blueprint $table) {
            $table->id('id');
            $table->text('name')->index();
            $table->string('slug')->nullable()->index();
            $table->text('title')->nullable();
            $table->string('image');
            $table->text('description');
            $table->string('phone')->nullable();
            $table->text('social')->nullable();
            $table->timestamps();
        });

        Schema::create('club_coach', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Coach::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Club::class)->constrained()->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coaches');
        Schema::dropIfExists('club_coach');
    }
};
