<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Storage;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
			$table->foreignId('category_id');
			$table->foreignId('user_id');
            $table->timestamps();
			$table->string('title');
			$table->text('body');
			$table->string('img_url')->default(env('APP_URL') . Storage::url('mRLtGZ5zqAOXhugVRqD0Ebq0CrfYV8vHAdshd1Pf.jpg'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}