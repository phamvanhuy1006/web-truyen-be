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
                'name' => 'Thieu nien ngheo',
                'bookId' => 1,
                'content' => 'Nội dung nè',
                'chapterOrder' => 1,
                'slug' => 'chuong-1'
            ]
        ]);
    }
}
