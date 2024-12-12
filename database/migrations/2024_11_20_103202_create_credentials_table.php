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
        Schema::create('credentials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            /*
            $table->foreign('user_id', 'credentials_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            */

            $table->enum('role',['student', 'tutor', 'admin']);
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');
            $table->string('extension')->nullable();
            
            $table->string('gender');
            $table->date('birthdate');
            $table->string('birthplace');

            $table->string('civilstatus');
            $table->string('religion')->nullable();
            $table->string('nationality');

            $table->string('mobilenumber')->nullable();
            $table->string('landlinenumber')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credentials');
    }
};
