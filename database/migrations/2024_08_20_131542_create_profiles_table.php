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
        if (!Schema::hasTable('profiles')) {
            Schema::create('profiles', function (Blueprint $table) {
                $table->id(); // idカラムを追加
                $table->unsignedBigInteger('user_id');
                $table->string('name', 100)->nullable(); // nullable に変更
                $table->integer('age')->nullable();
                $table->enum('gender', ['male', 'female', 'other'])->nullable();
                $table->string('location', 100)->nullable();
                $table->text('bio')->nullable();
                $table->text('interests')->nullable();
                $table->text('languages_spoken')->nullable();
                $table->string('profile_picture', 255)->nullable();
                $table->text('visited_places')->nullable();
                $table->text('travel_preferences')->nullable();
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};