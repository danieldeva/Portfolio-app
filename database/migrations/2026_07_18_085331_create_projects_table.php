<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->text('long_description')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('live_url')->nullable();
            $table->string('github_url')->nullable();
            $table->boolean('featured')->default(false);
            $table->json('tech_stack')->nullable();
            $table->json('features')->nullable();
            $table->json('challenges')->nullable();
            $table->json('metrics')->nullable();
            $table->string('status')->default('completed');
            $table->integer('sort_order')->default(0);
            $table->string('category')->default('web');
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('projects'); }
};
