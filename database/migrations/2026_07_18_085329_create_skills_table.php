<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('category', ['frontend','backend','database','devops','tools','cloud','vcs','soft']);
            $table->integer('level')->default(80); // 0-100
            $table->integer('confidence')->default(80); // 0-100
            $table->integer('years')->default(1);
            $table->string('icon')->nullable();
            $table->string('color')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('skills'); }
};
