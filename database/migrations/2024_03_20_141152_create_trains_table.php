<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 50);
            $table->string('stazione_arrivo', 50);
            $table->dateTime('orario_partenza', $precision = 0);
            $table->dateTime('orario_arrivo', $precision = 0);
            $table->string('codice_treno', 15)->unique();
            $table->tinyInteger('carrozze')->nullable();
            $table->boolean('on_time')->nullable();
            $table->boolean('canceled')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
