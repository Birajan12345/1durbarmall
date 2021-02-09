<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('floor_info_id')->unsigned()->index();
            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->text('meta_description')->nullable();
            $table->enum('type', ['Asian Cuisine','Italian Food','Mexican Food']);
            $table->text('phone')->nullable();
            $table->text('email')->nullable();
            $table->text('link')->nullable();
            $table->text('content')->nullable();
            $table->text('foods_image')->nullable();
            $table->boolean('is_featured')->default(0);
            $table->boolean('is_published')->default(0);
            $table->foreign('floor_info_id')
                ->references('id')
                ->on('floorinfos')
                ->onDelete('cascade');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('foods');
        Schema::enableForeignKeyConstraints();
    }
}
