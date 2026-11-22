
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('varian_produk', function (Blueprint $table) {
            $table->id('id_varian');

            $table->foreignId('id_produk')
                ->constrained('produk_parfume', 'id_produk')
                ->cascadeOnDelete();

            $table->string('ukuran_varian', 20);
            $table->decimal('harga', 12, 2);
            $table->unsignedInteger('stok')->default(0);
            $table->unsignedInteger('berat');
            $table->string('sku', 50)->unique();

            $table->timestamps();

            $table->unique(['id_produk', 'ukuran_varian']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('varian_produk');
    }
};
