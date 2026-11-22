
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('penggunaan_voucher', function (Blueprint $table) {
            $table->id('id_penggunaan');

            $table->foreignId('id_voucher')
                ->constrained('voucher', 'id_voucher')
                ->restrictOnDelete();

            $table->foreignId('id_pesanan')
                ->unique()
                ->constrained('pesanan', 'id_pesanan')
                ->cascadeOnDelete();

            $table->decimal('jumlah_diskon', 12, 2);
            $table->dateTime('tanggal_penggunaan');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penggunaan_voucher');
    }
};
