<?php

namespace Database\Seeders;

use App\Helpers\CommonHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listCategories = CommonHelper::convertToArrayCode([
            'Truyện Chữ', 'Truyện Tranh'
        ]);
        DB::table('categories')->insert($listCategories);
    }
}
