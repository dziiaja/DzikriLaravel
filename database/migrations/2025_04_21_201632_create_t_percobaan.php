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
        Schema::create('t_percobaan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');              
            $table->integer('umur');             
            $table->string('alamat');            
            $table->date('tanggal_lahir');       
            $table->enum('jenis_kelamin', ['L', 'P']); 
            $table->string('email')->unique();   
            $table->string('no_hp');           
            $table->boolean('is_active');        
            $table->text('catatan');            
            $table->float('berat_badan');        
            $table->float('tinggi_badan');       
            $table->string('pekerjaan');         
            $table->char('kode_pos', 5);         
            $table->string('kewarganegaraan');   
            $table->json('hobi');                
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
        Schema::dropIfExists('t_percobaan');
    }
};
