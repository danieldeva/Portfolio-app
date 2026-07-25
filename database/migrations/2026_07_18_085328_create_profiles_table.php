<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tagline')->nullable();
            $table->text('bio')->nullable();
            $table->string('avatar')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('location')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('resume_path')->nullable();
            $table->boolean('open_to_work')->default(true);
            $table->string('availability')->nullable();
            $table->string('salary_range')->nullable();
            $table->string('notice_period')->nullable();
            $table->string('preferred_location')->nullable();
            $table->integer('resume_download_count')->default(0);
            $table->integer('visitor_count')->default(0);
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('profiles'); }
};
