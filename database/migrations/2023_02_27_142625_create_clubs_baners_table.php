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
        Schema::create('baner_club', function (Blueprint $table) {
                $table->foreignIdFor(\App\Models\Club::class)->constrained()->cascadeOnDelete();
                $table->foreignIdFor(\App\Models\Baner::class)->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baner_club');
    }
};
