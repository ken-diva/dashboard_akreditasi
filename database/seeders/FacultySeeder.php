<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // DB::table('faculty')->truncate();

        $faculties = [
            'Fakultas Teknik Elektro',
            'Fakultas Rekayasa Industri',
            'Fakultas Informatika',
            'Fakultas Ekonomi dan Bisnis',
            'Fakultas Komunikasi dan Ilmu Sosial',
            'Fakultas Industri Kreatif',
            'Fakultas Ilmu Terapan',
        ];

        foreach ($faculties as $index => $name) {
            DB::table('faculty')->insert([
                'id' => $index + 1, // Assuming 'id' is auto-increment, you might omit this if it's set to auto-increment in your table.
                'faculty_name' => $name,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
