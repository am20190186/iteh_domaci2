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
        Schema::create('karte', function (Blueprint $table) {
            $table->id();
            $table->integer('iznos');
            $table->integer('brojSedista');
            $table->string('nacinPlacanja');
            $table->foreignId('posetilac_id')->constrained('posetioci');
            $table->foreignId('predstava_id')->constrained('predstave');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karte');
    }
};
