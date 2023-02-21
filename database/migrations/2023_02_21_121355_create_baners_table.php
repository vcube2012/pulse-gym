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
        Schema::create('baners', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('sub_title');
            $table->string('type');
            $table->timestamps();
        });
        Schema::create('baner_price_category', function (Blueprint $table) {
            $table->foreignIdFor(\App\Models\Baner::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\PriceCategory::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baners');
        Schema::dropIfExists('baner_price_category');

    }
};
