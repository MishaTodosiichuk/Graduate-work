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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->string('Answer1');
            $table->string('Answer2');
            $table->string('Answer3');
            $table->integer('RightAnswer');
            $table->unsignedBigInteger('test_id');


            $table->timestamps();
            $table->softDeletes();

            $table->index('test_id', 'task_test_idx');


            $table->foreign('test_id', 'task_test_fk')->on('tests')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
