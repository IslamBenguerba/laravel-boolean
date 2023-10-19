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
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->string('idDrink')->nullable();
            $table->string('strDrink');
            $table->string('strDescrizione')->nullable();
            $table->string('strCategorstry')->nullable();
            $table->string('strIBA')->nullable();
            $table->string('strGlastrss')->nullable();
            $table->string('strInstructions')->nullable();
            $table->string('strInstructionsES')->nullable();
            $table->string('strInstructionsDE')->nullable();
            $table->string('strInstructionsFR')->nullable();
            $table->string('strInstructionsIT')->nullable();
            $table->string('strDrinkThumb')->nullable();
            for ($i = 1; $i < 16; $i++) {
                $table->string('strIngredient'.$i)->nullable();
            }
            for ($i = 1; $i < 16; $i++) {
                $table->string('strMeasure'.$i)->nullable();
            }
            $table->string('strImageSource')->nullable();
            $table->string('strImageAttribution')->nullable();
            $table->string('strCreativeCommonsConfirmed')->nullable();
            $table->date('dateModified')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cocktails');
    }
};
