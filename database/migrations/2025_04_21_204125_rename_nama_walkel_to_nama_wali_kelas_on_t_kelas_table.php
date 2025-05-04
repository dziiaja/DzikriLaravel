<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_tugas', function (Blueprint $table) {
            $table->renameColumn('nama_walkel', 'nama_wali_kelas');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nama_wali_kelas_on_t_kelas', function (Blueprint $table) {
            //
        });
    }
};
