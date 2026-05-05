<?php
// database/migrations/2025_01_01_000002_create_profil_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('profil', function (Blueprint $table) {
            $table->id();
            $table->text('sejarah');
            $table->text('visi');
            $table->text('misi');
            $table->string('nama_camat');
            $table->string('nip_camat');
            $table->text('sambutan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('profil');
    }
};