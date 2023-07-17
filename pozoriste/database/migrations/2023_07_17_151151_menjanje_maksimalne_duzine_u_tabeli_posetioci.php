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
        Schema::table('posetioci', function (Blueprint $table) {
            $table ->string('imePrezime', 40)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posetioci', function (Blueprint $table) {
            $table ->string('imePrezime', 30)->change();
        });
    }
};
