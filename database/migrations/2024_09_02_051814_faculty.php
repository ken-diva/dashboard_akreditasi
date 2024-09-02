<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('
            CREATE TABLE `faculty` (
                `id` int PRIMARY KEY AUTO_INCREMENT,
                `faculty_name` varchar(255) NOT NULL,
                `created_at` datetime DEFAULT (current_timestamp),
                `updated_at` datetime DEFAULT (current_timestamp)
            );
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('DROP TABLE IF EXISTS `faculty`;');
    }
};
