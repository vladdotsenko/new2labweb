<?php

namespace App\Migration;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description_short')->nullabble();
            $table->text('description');
            $table->string('image')->nullabble();
            $table->boolean('image_show')->nullabble();
            $table->string('meta_title')->nullabble();
            $table->string('meta_description')->nullabble();
            $table->string('meta_keyword')->nullabble();
            $table->boolean('published');
            $table->integer('viewed')->nullabble();
            $table->integer('created_by')->nullabble();
            $table->integer('modified_by')->nullabble();
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
        Schema::dropIfExists('articles');
    }
}
