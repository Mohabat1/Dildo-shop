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
            $table->string('subject')->after('email'); // Добавляем столбец `subject` после столбца `email`
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('compacts', function (Blueprint $table) {
            $table->dropColumn('text'); // Удаляем столбец `text` при откате миграции
        });
    }
};
