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
        Schema::create('case_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\LegalCase::class);
            $table->string('from_status');
            $table->string('to_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_logs');
    }
};
