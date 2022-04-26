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
        Schema::create('blog_user', function (Blueprint $table) {
            $table->bigInteger('blog_id')->unsigned(); // This column will hold the blog ID that belongs to the User ID.
            $table->bigInteger('user_id')->unsigned(); // This column will hold the user ID that belongs to the blog ID.
            $table->timestamps();
            $table->primary(['blog_id', 'user_id']);

            $table->foreign('blog_id')->references('id')->on('blogs')->onDelete('cascade'); // Take your foreign ID and reference it to the id of the blog table.
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Take your foreign ID and reference it to the id of the users table.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_user');
    }
};
