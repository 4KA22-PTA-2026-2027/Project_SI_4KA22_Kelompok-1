
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('keranjang_belanja', function (Blueprint $table) {
            $table->id('id_keranjang');

            $table->foreignId('id_pengguna')
                ->unique()
                ->constrained('pengguna', 'id_pengguna')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('keranjang_belanja');
    }
};
