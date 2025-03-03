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
        Schema::table('compacts', function (Blueprint $table) {
            // Удаляем столбец `text`
            $table->dropColumn('text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('compacts', function (Blueprint $table) {
            // Восстанавливаем столбец `text` (если потребуется откат)
            $table->text('text')->nullable();
        });
    }
};
