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
        DB::statement('
            CREATE TABLE `study_program` (
            `id` int PRIMARY KEY AUTO_INCREMENT,
            `faculty_id` int NOT NULL,
            `studyprogram_name` varchar(255) NOT NULL,
            `level` int,
            `accreditation_status` boolean DEFAULT true,
            `national_accreditation` varchar(255),
            `national_accrediation_grade` int,
            `date_national_accreditation` datetime,
            `expired_national_accreditation` datetime,
            `international_accreditaton` varchar(255),
            `international_accrediation_grade` int,
            `date_international_accreditation` datetime,
            `expired_international_accreditation` datetime,
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
        DB::statement('DROP TABLE IF EXISTS `study_program`;');
    }
};
