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
        Schema::create('presensi_gurus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_guru'); // Kolom foreign key untuk guru
            $table->date('tgl_absen'); // Kolom untuk tanggal absen
            $table->enum('status_kehadiran', ['Hadir', 'Tidak Hadir', 'Izin', 'Sakit']); // Kolom untuk status kehadiran
            $table->string('keterangan')->nullable(); // Kolom untuk keterangan tambahan
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('id_guru')
                ->references('id')
                ->on('guru') // Make sure the 'gurus' table exists
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensi_gurus');
    }
};
