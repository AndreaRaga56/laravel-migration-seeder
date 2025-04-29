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
            $table->string("azienda", 250);
            $table->string("stazione_di_partenza", 50);
            $table->string("stazione_di_arrivo", 50);
            $table->timestamp("orario_di_partenza");
            $table->timestamp("orario_di_arrivo");
            $table->integer("codice_treno")->unique();
            $table->integer("totale_carrozze");
            $table->boolean("is_in_orario");
            $table->boolean("is_cancellato");
            $table->timestamps();
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
