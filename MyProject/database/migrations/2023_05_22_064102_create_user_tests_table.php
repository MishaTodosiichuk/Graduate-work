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
        Schema::create('user_tests', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('tests_id');
            $table->integer('mark')->default(10);

            $table->index('user_id', 'user_test_user_idx');
            $table->index('tests_id', 'user_test_test_idx');

            $table->foreign('user_id', 'user_test_user_fk')->on('users')->references('id');
            $table->foreign('tests_id', 'user_test_test_fk')->on('tests')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_tests');
    }
};
