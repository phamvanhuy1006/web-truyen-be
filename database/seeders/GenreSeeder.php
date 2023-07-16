<?php

namespace Database\Seeders;

use App\Helpers\CommonHelper;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $listGenres = CommonHelper::convertToArrayCode([
            'Tiên Hiệp', 'Kiếm Hiệp', 'Ngôn Tình',
            'Đam Mỹ', 'Quan Trường', 'Võng Du', 'Khoa Huyễn', 'Huyền Huyễn',
            'Hệ Thống', 'Dị Giới', 'Dị Năng', 'Quân Sự',
            'Lịch Sử', 'Xuyên Không', 'Xuyên Nhanh',
            'Trọng Sinh', 'Thám Hiểm', 'Linh Dị', 'Ngược',
            'Sủng', 'Cung Đấu', 'Nữ Cường', 'Gia Đấu',
            'Đông Phương', 'Đô Thị', 'Bách Hợp',
            'Hài Hước', 'Điền Văn', 'Cổ Đại', 'Mạt Thế',
            'Truyện Teen', 'Phương Tây', 'Nữ Phụ', 'Light Novel',
            'Việt Nam', 'Đoản Văn', 'Khác'
        ]);
        DB::table('genres')->insert($listGenres);
    }
}
