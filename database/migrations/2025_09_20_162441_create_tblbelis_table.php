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
        Schema::create('tblbelis', function (Blueprint $table) {
            $table->id();
            $table->text('nota_beli')->nullable();
            $table->date('tgl_beli')->nullable();
            $table->string('modal_beli')->nullable();
            $table->string('brd_id')->unique();
            $table->integer('jumlah')->nullable();
            $table->string('satuan')->nullable();
            $table->integer('harga_beli')->nullable();
            $table->decimal('total_bayar', 10, 2)->nullable();
            $table->integer('jumlah_bayar')->nullable();
            $table->string('pajak')->nullable();
            $table->string('status_bayar')->nullable();
            $table->decimal('hutang', 10, 2)->nullable();
            $table->text('bukti_pajak')->nullable();
            $table->text('bukti_tf')->nullable();
            $table->string('des')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblbelis');
    }
};
