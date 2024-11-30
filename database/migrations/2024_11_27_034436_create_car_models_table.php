<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('car_brand_id');
            $table->string('name');
            $table->string('alias');
            $table->boolean('active')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('car_models', function (Blueprint $table) {
            $table->foreign('car_brand_id')->references('id')->on('car_brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('car_models', function (Blueprint $table) {
            $table->dropForeign(['car_brand_id']);
        });

        Schema::dropIfExists('car_models');
    }
};
