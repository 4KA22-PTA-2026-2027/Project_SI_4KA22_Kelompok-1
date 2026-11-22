
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->id('id_pengiriman');

            $table->foreignId('id_pesanan')
                ->unique()
                ->constrained('pesanan', 'id_pesanan')
                ->cascadeOnDelete();

            $table->string('nama_ekspedisi', 100);
            $table->string('layanan_pengiriman', 100)->nullable();
            $table->string('nomor_resi', 100)->nullable();
            $table->decimal('biaya_pengiriman', 12, 2);

            $table->string('status_pengiriman', 30)
                ->default('menunggu');

            $table->dateTime('tanggal_pengiriman')->nullable();
            $table->dateTime('tanggal_diterima')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengiriman');
    }
};
