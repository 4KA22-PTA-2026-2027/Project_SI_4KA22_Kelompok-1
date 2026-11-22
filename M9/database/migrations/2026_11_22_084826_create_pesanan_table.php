
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id('id_pesanan');

            $table->foreignId('id_pengguna')
                ->constrained('pengguna', 'id_pengguna')
                ->restrictOnDelete();

            $table->string('kode_pesanan', 50)->unique();
            $table->dateTime('tanggal_pesanan');

            $table->decimal('subtotal', 12, 2);
            $table->decimal('diskon', 12, 2)->default(0);
            $table->decimal('biaya_pengiriman', 12, 2)->default(0);
            $table->decimal('total_pembayaran', 12, 2);

            $table->string('status_pembayaran', 30)
                ->default('belum_dibayar');

            $table->string('status_pesanan', 30)
                ->default('menunggu_pembayaran');

            $table->string('nama_penerima', 100);
            $table->string('no_telepon_penerima', 20);
            $table->text('alamat_pengiriman');
            $table->string('kota', 100);
            $table->string('provinsi', 100);
            $table->string('kode_pos', 10);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
