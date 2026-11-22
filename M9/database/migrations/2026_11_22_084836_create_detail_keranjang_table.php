
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_keranjang', function (Blueprint $table) {
            $table->id('id_detail_keranjang');

            $table->foreignId('id_keranjang')
                ->constrained('keranjang_belanja', 'id_keranjang')
                ->cascadeOnDelete();

            $table->foreignId('id_varian')
                ->constrained('varian_produk', 'id_varian')
                ->restrictOnDelete();

            $table->unsignedInteger('jumlah')->default(1);

            $table->timestamps();

            $table->unique(['id_keranjang', 'id_varian']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_keranjang');
    }
};
