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
        Schema::create('price_categories', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->string('color');
            $table->boolean('new')->default(false);
            $table->boolean('actia')->default(false);
            $table->text('comment')->nullable();
            $table->timestamps();
        });
        Schema::create('club_price_category', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\PriceCategory::class)->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('price_categories');
    }
};
