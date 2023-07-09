<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'name' => 'Phàm Nhân Tu Tiên',
                'author' => 'Vong Ngữ',
                'genresList' => 'tien-hiep, kiem-hiep',
                'collectionList' => 'truyen-hot, truyen-full',
                'categoryId' => 1,
                'slug' => 'pham-nhan-tu-tien',
                'description' => '
                    Tác giả:Vong Ngữ
                    Thể loại:Tiên Hiệp, Huyền Huyễn
                    Nguồn:Bạch Ngọc Sách
                    Trạng thái:Full
                    1 2 3 4 5 6 7 8 9 10
                    Đánh giá: 8.5/10 từ 3400 lượt
                    Tên gốc: 凡人修仙之仙界篇
                    Tên khác: Phàm Nhân Tiên Giới Thiên
                    
                    Phàm nhân tu tiên, phong vân tái khởi
                    Xuyên qua không gian và thời gian, luân hồi nghịch chuyển
                    Kim Tiên Thái Ất, Đại La Đạo Tổ Tam thiên đại đạo, pháp tắc chí tôn.
                    
                    《 Phàm Nhân Tu Tiên Truyện 》 Tiên Giới Thiên là tích xưa về một Hàn Lập khuynh đảo Tiên Giới, một tiểu tử người phàm tu tiên đến cảnh giới Bất Diệt trong truyền thuyết.',
                'bookCover' => 'https://s.net.vn/zaMX',
                'status' => "COMPLETED",
                'rating' => 'quantity: 0, ratingPoint: 0'
            ]
        ]);
    }
}
