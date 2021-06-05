<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_requests', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable()->default('title');
            $table->longText('description')->nullable()->default('description');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('post_id')->nullable()->constrained();
            $table->boolean('confirmed')->nullable()->default(true);
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
        Schema::dropIfExists('post_requests');
    }
}
