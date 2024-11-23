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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'address_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

            $table->string('custom-add');
            $table->string('barangay');
            $table->string('city');
            $table->string('province');

            $table->string('custom-add-current')->nullable();
            $table->string('barangay-current')->nullable();
            $table->string('city-current')->nullable();
            $table->string('province-current')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
