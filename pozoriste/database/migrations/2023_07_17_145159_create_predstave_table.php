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
        Schema::create('predstave', function (Blueprint $table) {
            $table->id();
            $table->string('naziv',50);
            $table->string('zanr',30);
            $table->integer('brojSale');
            $table->integer('trajanje');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('predstave');
    }
};
