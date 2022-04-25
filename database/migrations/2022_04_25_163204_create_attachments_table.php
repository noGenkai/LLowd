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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->default(); // You have to enter the id of the project that it belongs to.
            $table->foreignId('user_id')->default(); // you have to enter the id of the user that the comment belongs to.
            $table->string('file_name')->default();
            $table->string('file_path')->default(); // 
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
        Schema::dropIfExists('attachments');
    }
};
