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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
//            $table->unsignedBigInteger('cat_id')->nullable();
            $table->foreignId("category_id")->references("id")->on("categories");
            $table->foreignId('brand_id')->references('id')->on('brands');
            $table->string('name',30);
            $table->longText('description',)->default('بدون توضیحات');
            $table->string('img')->default('file_image_duetone.png');
            $table->float('price');
            $table->float('discount')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
