<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nama');
            $table->char('kode_jenis',4);
            $table->char('umur',2);
            $table->integer('harga');
            $table->text('deskripsi_view');
            $table->text('deskripsi_detail');
            $table->string('foto');
            $table->integer('stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
}
