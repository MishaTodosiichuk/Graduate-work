<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('intensives', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('start_intensive');
            $table->string('lvl');
            $table->string('image');
            $table->string('lvl_image');
            $table->string('duration');
            $table->string('language');
            $table->integer('count_seats');
            $table->integer('time');
            $table->text('description');
            $table->string('video_lesson');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intensives');
    }
};
