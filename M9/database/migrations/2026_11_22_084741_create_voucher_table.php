
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('voucher', function (Blueprint $table) {
            $table->id('id_voucher');
            $table->string('kode_voucher', 50)->unique();
            $table->string('nama_voucher', 100);
            $table->text('deskripsi')->nullable();

            $table->enum('jenis_diskon', ['persen', 'nominal']);
            $table->decimal('nilai_diskon', 12, 2);
            $table->decimal('minimal_pembelian', 12, 2)->default(0);
            $table->decimal('maksimal_diskon', 12, 2)->nullable();

            $table->unsignedInteger('kuota')->nullable();
            $table->dateTime('tanggal_mulai');
            $table->dateTime('tanggal_berakhir');

            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('voucher');
    }
};
