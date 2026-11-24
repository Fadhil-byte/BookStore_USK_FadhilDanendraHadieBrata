<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("ALTER TABLE `pesanans` MODIFY COLUMN `status_pembayaran` ENUM('Belum Dibayar', 'Sudah Dibayar', 'Dikembalikan') NOT NULL DEFAULT 'Belum Dibayar'");
    }

    public function down(): void
    {
        DB::statement("ALTER TABLE `pesanans` MODIFY COLUMN `status_pembayaran` ENUM('Belum Dibayar', 'Sudah Dibayar') NOT NULL DEFAULT 'Belum Dibayar'");
    }
};
