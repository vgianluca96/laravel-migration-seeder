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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company', 20);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->time('departure_hour');
            $table->time('arrival_hour');
            $table->char('train_code', 8);
            $table->tinyInteger('wagons_num');
            $table->boolean('on_time');
            $table->boolean('canceled');

            /*
            Azienda: string
            Stazione di partenza: string
            Stazione di arrivo: string
            Orario di partenza: 
            Orario di arrivo
            Codice Treno
            Numero Carrozze
            In orario
            Cancellato
            */
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
