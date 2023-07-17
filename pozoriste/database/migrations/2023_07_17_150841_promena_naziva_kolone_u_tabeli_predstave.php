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
        Schema::table('predstave', function (Blueprint $table) {
            $table->renameColumn('brojSale', 'sala');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('predstave', function (Blueprint $table) {
            $table->renameColumn('sala', 'brojSale');
        });
    }
};
