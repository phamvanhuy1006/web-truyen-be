<?php

namespace Database\Seeders;

use App\Helpers\CommonHelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listCollections = CommonHelper::convertToArrayCode([
            'Truyện mới cập nhật', 'Truyện Hot', 'Truyện Full',
            'Tiên Hiệp Hay', 'Kiếm Hiệp Hay', 'Ngôn Tình Hay',
            'Ngôn  Tình Sắc', 'Ngôn Tình Ngược', 'Ngôn Tình Sủng',
            'Ngôn Tình Hài', 'Đam Mỹ Hài', 'Đam Mỹ Hay',
            'Đam Mỹ H Văn', 'Đam Mỹ Sắc'
        ]);
        DB::table('collections')->insert($listCollections);
    }
}
