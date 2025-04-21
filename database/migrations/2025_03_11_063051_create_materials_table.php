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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('edt_material_komponen')->nullable();
            $table->string('kode_material')->unique();
            $table->string('kode_material_stock')->nullable();
            $table->string('no_part')->nullable();
            $table->string('nama_material');
            $table->string('spesifikasi');
            $table->string('dimensi');
            $table->string('keterangan');
            $table->bigInteger('kedatangan_bixie')->default(0);
            $table->bigInteger('kedatangan_madiun')->default(0);
            $table->bigInteger('kedatangan_katalor')->default(0);
            $table->string('stock')->nullable();
            $table->bigInteger('qty/ts')->default(0);
            $table->foreignId('kebutuhan_id');
            $table->foreign('kebutuhan_id')->references('id')->on('kebutuhans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
