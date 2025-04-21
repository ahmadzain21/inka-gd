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
        Schema::create('kebutuhans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_material');
            $table->integer('1_qty_kebutuhan_1')->default(0)->nullable();
            $table->integer('2_qty_kebutuhan_90')->default(0)->nullable();
            $table->integer('3_qty_kebutuhan_90')->default(0)->nullable();
            $table->integer('4_qty_kebutuhan_100')->default(0)->nullable();
            $table->integer('5_qty_kebutuhan_100')->default(0)->nullable();
            $table->integer('6_qty_kebutuhan_100')->default(0)->nullable();
            $table->integer('7_qty_kebutuhan_100')->default(0)->nullable();
            $table->integer('8_qty_kebutuhan_90')->default(0)->nullable();
            $table->integer('9_qty_kebutuhan_100')->default(0)->nullable();
            $table->integer('10_qty_kebutuhan_100')->default(0)->nullable();
            $table->integer('11_qty_kebutuhan_100')->default(0)->nullable();
            $table->integer('12_qty_kebutuhan_100')->default(0)->nullable();
            $table->integer('13_qty_kebutuhan_55')->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebutuhans');
    }
};
