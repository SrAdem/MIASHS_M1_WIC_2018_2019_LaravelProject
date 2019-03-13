<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->timestamps();
            $table->char('post_author', 100)->nullable();
            $table->date('post_date')->nullable();
            $table->char('post_content',100)->nullable();
            $table->char('post_title',100)->nullable();
            $table->char('post_status', 100)->nullable();
            $table->char('post_name',100)->nullable();
            $table->char('post_type', 100)->nullable();
            $table->char('post_category',100)->nullable();
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
