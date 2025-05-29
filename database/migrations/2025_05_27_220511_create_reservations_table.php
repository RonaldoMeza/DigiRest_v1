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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
                
            $table->foreignId('table_id')
                ->constrained('tables')
                ->cascadeOnDelete();    

            $table->unsignedTinyInteger('guests')->default(1);   // # comensales
            $table->enum('status', ['pending','confirmed','cancelled'])
                  ->default('pending');                         // flujo de reserva
            $table->timestamp('starts_at');                      // inicio
            $table->timestamp('ends_at')->nullable();            // fin (opcional)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
