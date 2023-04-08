<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('player_stats', function (Blueprint $table) {
            $table->id();

            $table->foreignId('player_id')->constrained();
            $table->foreignId('game_id')->constrained();

            $table->integer('player_ab')->nullable();
            $table->integer('player_r')->nullable();
            $table->integer('player_h')->nullable();
            $table->integer('player_rbi')->nullable();
            $table->integer('player_bb')->nullable();
            $table->integer('player_so')->nullable();
            $table->integer('player_pitch_ip')->nullable();
            $table->integer('player_pitch_h')->nullable();
            $table->integer('player_pitch_r')->nullable();
            $table->integer('player_pitch_er')->nullable();
            $table->integer('player_pitch_bb')->nullable();
            $table->integer('player_pitch_so')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('player_stats');
    }
};
