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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id('id_detail');
            $table->unsignedBigInteger('id_transaksi');
            $table->unsignedBigInteger('id_produk');
            $table->integer('jumlah');
            $table->decimal('harga', 12, 2);
            
            // Note: Laravel doesn't support generated stored columns directly
            // You'll need to add subtotal column as regular decimal and calculate it in the model
            $table->decimal('subtotal', 14, 2)->storedAs('jumlah * harga');
            
            // Foreign Keys
            $table->foreign('id_transaksi', 'fk_dtrx_trx')
                  ->references('id_transaksi')
                  ->on('transaksi')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
                  
            $table->foreign('id_produk', 'fk_dtrx_produk')
                  ->references('id_produk')
                  ->on('produk')
                  ->onUpdate('cascade')
                  ->onDelete('restrict');
            
            // Unique constraint and indexes
            $table->unique(['id_transaksi', 'id_produk'], 'uq_detail_trans_produk');
            $table->index('id_transaksi', 'idx_dtrx_trx');
            $table->index('id_produk', 'idx_dtrx_produk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
