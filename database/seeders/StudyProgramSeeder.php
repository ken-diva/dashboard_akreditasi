<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array of study programs
        $studyPrograms = [
            ['faculty_id' => 3, 'studyprogram_name' => 'Informatika', 'level' => 1],
            ['faculty_id' => 3, 'studyprogram_name' => 'Teknologi Informasi', 'level' => 1],
            ['faculty_id' => 3, 'studyprogram_name' => 'Rekayasa Perangkat Lunak', 'level' => 1],
            ['faculty_id' => 3, 'studyprogram_name' => 'Sains Data', 'level' => 1],
            ['faculty_id' => 3, 'studyprogram_name' => 'PJJ Informatika', 'level' => 1],
            ['faculty_id' => 3, 'studyprogram_name' => 'Teknologi Informasi (Jakarta)', 'level' => 1],
            ['faculty_id' => 3, 'studyprogram_name' => 'Informatika (Surabaya)', 'level' => 1],
            ['faculty_id' => 3, 'studyprogram_name' => 'Rekayasa Perangkat Lunak (Surabaya)', 'level' => 1],
            ['faculty_id' => 3, 'studyprogram_name' => 'Teknologi Informasi (Surabaya)', 'level' => 1],
            ['faculty_id' => 3, 'studyprogram_name' => 'Sains Data (Surabaya)', 'level' => 1],
            ['faculty_id' => 3, 'studyprogram_name' => 'Informatika', 'level' => 2],
            ['faculty_id' => 3, 'studyprogram_name' => 'Keamanan Siber dan Forensik Digital', 'level' => 2],
            ['faculty_id' => 3, 'studyprogram_name' => 'Informatika', 'level' => 3],
        ];

        // Truncate the table to remove all existing data
        // DB::table('study_program')->truncate();

        // Insert the study programs
        foreach ($studyPrograms as $program) {
            DB::table('study_program')->insert(array_merge($program, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]));
        }
    }
}
