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
            $table->after('godine', function ($table) {
                $table->string('kontakt');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posetioci', function (Blueprint $table) {
            $table->dropColumn('kontakt');
        });
    }
};
