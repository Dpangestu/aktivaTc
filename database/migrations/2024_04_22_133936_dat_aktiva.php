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
        Schema::create('dat_aktiva', function (Blueprint $table) {
            $table->id('no_seri');
            $table->string('desc');
            $table->string('kelas');
            $table->string('kondisi');
            $table->string('no_group');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('dat_aktiva');
    }
};