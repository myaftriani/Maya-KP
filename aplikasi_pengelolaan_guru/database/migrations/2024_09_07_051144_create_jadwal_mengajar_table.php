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
        Schema::create('jadwal_mengajar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_guru'); // Corrected to unsignedBigInteger for foreign key
            $table->string('hari');
            $table->time('waktu');
            $table->string('kelas');
            $table->string('mata_pelajaran');

            // Define foreign key relationship with 'gurus' table
            $table->foreign('id_guru')
                ->references('id')
                ->on('guru') // Make sure the 'gurus' table exists
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_mengajar');
    }
};
