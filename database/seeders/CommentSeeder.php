<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('comments')->insert([
            [
                'email' => 'pvhuy1006@gmail.com',
                'commentator' => "Van Huy Pham",
                'bookSlug' => 'pham-nhan-tu-tien',
                'content' => "Truyện hay quá!"
            ]
        ]);
    }
}
