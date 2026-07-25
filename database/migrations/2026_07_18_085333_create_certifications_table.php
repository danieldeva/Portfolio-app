<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('certifications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('issuer');
            $table->string('issuer_logo')->nullable();
            $table->date('issued_at');
            $table->date('expires_at')->nullable();
            $table->string('credential_url')->nullable();
            $table->string('certificate_image')->nullable();
            $table->boolean('verified')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('certifications'); }
};
