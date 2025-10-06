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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->dateTime('tanggal')->useCurrent();
            $table->unsignedBigInteger('id_pelanggan')->nullable();
            $table->decimal('total_harga', 14, 2)->default(0.00);
            $table->enum('metode_bayar', ['Tunai', 'QRIS', 'Transfer', 'Debit', 'Kredit'])->default('Tunai');
            $table->timestamp('created_at')->useCurrent();
            
            // Foreign Key
            $table->foreign('id_pelanggan', 'fk_trx_pelanggan')
                  ->references('id_pelanggan')
                  ->on('pelanggan')
                  ->onUpdate('cascade')
                  ->onDelete('set null');
            
            // Indexes
            $table->index('tanggal', 'idx_trx_tanggal');
            $table->index('id_pelanggan', 'idx_trx_pelanggan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
