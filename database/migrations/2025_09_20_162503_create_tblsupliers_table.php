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
        Schema::create('tblsupliers', function (Blueprint $table) {
            $table->id('id_suplier');
            $table->foreignId('id_beli')->constrained('tblbelis')->onDelete('cascade');
            $table->string('nama_suplier')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kota')->nullable();
            $table->string('no_telp')->nullable();
            $table->string('kontak')->nullable();
            $table->string('nama_kontak')->nullable();
            $table->decimal('total_hutang', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblsupliers');
    }
};
