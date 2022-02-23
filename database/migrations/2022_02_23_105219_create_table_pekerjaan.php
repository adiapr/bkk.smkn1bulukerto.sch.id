<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePekerjaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->string('perusahaan',50)->nullable();
            $table->string('lokasi',50)->nullable();
            $table->string('posisi',50)->nullable();
            $table->string('lulusan',20)->nullable();
            $table->date('batas')->nullable();
            $table->string('logo')->nullable();
            $table->text('deskripsi')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('table_pekerjaan');
    }
}
