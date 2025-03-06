<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Имя клиента
            $table->string('email'); // Email
            $table->string('phone'); // Телефон
            $table->text('address'); // Адрес доставки
            $table->enum('payment', ['card', 'cash']); // Оплата: карта или нал
            $table->timestamps(); // Дата создания и обновления
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
