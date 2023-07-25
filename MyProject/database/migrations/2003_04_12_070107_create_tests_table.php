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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->integer('start_lvl');
            $table->integer('middle_lvl');
            $table->integer('hard_lvl');
            $table->unsignedBigInteger('user_id');
            $table->integer('mark')->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->index('user_id', 'test_user_idx');
            $table->foreign('user_id', 'test_user_fk')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
