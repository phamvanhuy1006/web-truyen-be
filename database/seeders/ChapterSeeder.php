<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chapters')->insert([
            [
                'name' => 'Chương 1',
                'bookId' => 1,
                'content' => 'Nội dung nè',
            ]
        ]);
    }
}
