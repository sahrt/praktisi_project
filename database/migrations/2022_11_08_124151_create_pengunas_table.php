<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengunas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();// email pasti uniq jadi setiap orang berbeda-beda
            $table->timestamp('email_verified_at')->nullable(); // untuk meanandakan terverifikasi email atau belum
            $table->string('password');
            $table->tinyInteger('type')->default(0);// lebih kecil dari pada int biasa menandakan tingkat hak akses
            $table->rememberToken(); //pembuatan outenfikasi
            $table->timestamps();// create record kapan data dibuat, kapan data ada perubahan
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengunas');
    }
}
