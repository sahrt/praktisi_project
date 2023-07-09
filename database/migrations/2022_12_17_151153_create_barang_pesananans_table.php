<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangPesananansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_pesananans', function (Blueprint $table) {
            $table->id();
            $table->char('kode_pesanan',10);
            $table->string('kode_barang');
            $table->integer('pcs');
            $table->integer('jumblah');
            $table->integer('totalS');
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
        Schema::dropIfExists('barang_pesananans');
    }
}
