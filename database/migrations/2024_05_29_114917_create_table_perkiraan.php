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
        Schema::create('perkiraan', function (Blueprint $table) {
            $table->bigIncrements('PerkiraanID');
            $table->string('NomorPerkiraan');
            $table->string('NamaPerkiraan');
            $table->string('Tipe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkiraan');
    }
};
