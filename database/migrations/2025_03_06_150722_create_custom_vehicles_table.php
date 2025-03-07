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
        Schema::create('custom_vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('type');
            $table->string('brand');
            $table->string('model');
            $table->year('year');
            $table->text('engine_mods')->nullable();
            $table->text('body_mods')->nullable();
            $table->text('suspension_mods')->nullable();
            $table->text('wheels')->nullable();
            $table->text('exhaust')->nullable();
            $table->text('interior_mods')->nullable();
            $table->integer('horsepower')->nullable();
            $table->integer('torque')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('top_speed')->nullable();
            $table->decimal('acceleration', 4, 2)->nullable();
            $table->string('custom_paint')->nullable();
            $table->text('notes')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['building', 'complete', 'solded'])->default('building');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_vehicles');
    }
};
