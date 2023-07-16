<?php

namespace Database\Seeders;

use App\Models\Book;
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
                'status' => Book::STATUS_BOOK['COMPLETED'],
                'rating' => 'quantity: 0, ratingPoint: 0'
            ],
            [
                'name' => 'Thần Đạo Đan Tôn',
                'author' => 'Cô Đơn Địa Phi',
                'genresList' => 'tien-hiep, huyen-huyen',
                'collectionList' => 'truyen-hot',
                'categoryId' => 1,
                'slug' => 'than-dao-dan-ton',
                'description' => '<div class="desc-text" itemprop="description" style="height: auto;">Lăng Hàn - Một Đan Đế đại danh đỉnh định mang trong thân mình tuyệt thế công pháp vì truy cầu bước cuối, xé bỏ tấm màn thành thần nhưng thất bại đã phải bỏ mình. Thế nhưng ông trời dường như không muốn tuyệt dường người, Lăng Hàn đã được trọng sinh vào một thiếu niên cùng tên và điều may mắn nhất là "Bất Diệt Thiên Kinh" ấn ký vẫn còn nằm nguyên trong tâm thức hắn.<br><br>Từ nay về sau sóng gió cuộn trào nổi lên, Đan Đế ngày xưa bây giờ phải cùng tranh phong với vô số thiên tài trẻ tuổi, lại bắt đầu một truyền thuyết mới như để chứng minh với trời đất: Ta, là người mạnh nhất!<br><strong>Phân chia cảnh giới: </strong>Luyện Thể, Tụ Nguyên, Dũng Tuyền, Linh Hải, Thần Thai, Sinh Hoa, Linh Anh, Hóa Thần cùng Thiên Nhân Cảnh.....<br><i>Mỗi cảnh giới chia làm chín tầng: tầng một đến ba là tiền kỳ, tầng bốn đến sáu gọi là trung kỳ và tầng bảy đến chín gọi là hậu kỳ và đỉnh</i><br><strong>Cảnh giới Đan Sư:</strong><i> Hoàng cấp,Huyền cấp, Địa cấp, Thiên cấp...</i><br><strong>Thần Cảnh</strong>: <i>Nhật Nguyệt Cảnh, Sơn Hà Cảnh, Tinh Thần Cảnh, Hằng Hà Cảnh, Sáng Thế Cảnh</i><br><i>Mỗi cảnh giới chia làm: Tiểu Cực Vị, Trung Cực Vị, Đại Cực Vi, Đại Viên Mãn trong một Cực Vị lại chia làm: Tiền kỳ, Trung kỳ, Hậu kỳ, Viên mãn</i><br><strong>Cảnh giới Tiên Vực</strong>:<i>Trảm Trần Cảnh (Nhất Trảm-Nhị Trảm-Tam Trảm-Tứ Trảm-Ngũ Trảm),Phân Hồn Cảnh (Dương Hồn-Âm Hồn-Thiên Hồn-Địa Hồn), Tiên Phủ Cảnh, Thăng Nguyên Cảnh, Tiên Vương có 9 tầng từ 1 đến 9, bên trên Tiên Vương là Thiên Tôn</i><br><b>Cảnh giới Đan Sư ở Tiên Vực:&nbsp;</b><i>Nhất Tinh, Nhị Tinh, Tam Tinh, Tứ Tinh,Ngũ Tinh Đan Sư</i></div>',
                'bookCover' => 'https://goeco.link/EQUEI',
                'status' => Book::STATUS_BOOK['UNCOMPLETED'],
                'rating' => 'quantity: 0, ratingPoint: 0'
            ],
            [
                'name' => 'Linh Vũ Thiên Hạ',
                'author' => 'Vũ Phong',
                'genresList' => 'tien-hiep, di-gioi, huyen-huyen',
                'collectionList' => 'truyen-hot, truyen-full',
                'categoryId' => 1,
                'slug' => 'linh-vu-thien-ha',
                'description' => '<div class="desc-text desc-text-full" itemprop="description" style="height: auto;"><b><i>Nhóm dịch:</i></b><i> Sói Già<br><b>Đả tự:</b> Bựa Thập Ngũ BLH<br><br></i><b>Lục Thiếu Du</b>, linh hồn bị xuyên qua đến thế giới khác, nhập vào thân thể của một thiếu gia không có địa vị phải trải qua cuộc sống không khác gì nô bộc.<br>Thế giới này lấy Vũ vi cường, lấy Linh vi tôn, nghe đồn khi võ đạo đỉnh phong, linh đạo đạt đến cực hạn có thể phá toái hư không. <br>Lục Thiếu Du mang theo ký ức từ kiếp trước tái sinh, không cam lòng làm một thiếu gia chẳng khác gì củi mục.<br><br>Trong thế giới xa lạ, <br>Say - nằm trên gối mỹ nhân, <br>Tỉnh - nắm quyền thiên hạ.<br>Đây mới là cuộc sống đáng mơ ước. <br>Linh - Vũ song tu<br>Bá chủ kiêu hùng<br>Đã đến, ta sẽ lưu lại một huyền thoại......<br><br><strong><b>Hệ Thống Tu Luyện:</b></strong><br><br><b>- Vũ giả: </b>Vũ khí, Vũ đồ, Vũ sĩ, Vũ sư, Vũ phách, Vũ tướng, Vũ suất, Vũ vương, Vũ tôn, Vũ đế.<br><b>- Linh giả: </b>Linh khí, Linh đồ, Linh sĩ, Linh sư, Linh phách, Linh tướng, Linh suất, Linh vương, Linh tôn, Linh đế.<br><br>Mỗi cấp được chia làm cửu trọng (chín tầng). Ngoài ra còn có Yêu thú, Linh thú các thể loại, chia làm nhất giai, nhị giai,... mỗi giai chia làm sơ kỳ, trung kỳ, hậu kỳ.<br><br>-&nbsp;<b>Công pháp:</b> chia làm sáu loại, từ cao đến thấp:&nbsp;Thiên, Địa, Huyền, Hoàng, Tinh, Thần<br><br>Tất nhiên là vẫn tồn tại một số công pháp đặc biệt bí ẩn khác.<br><br>-&nbsp;<b>Ngũ hệ:&nbsp;</b>Vũ giả, Vũ kỹ (công pháp cho vũ giả) được chia thành năm loại Mộc, Thủy, Hỏa, Thổ, Phong.</div>',
                'bookCover' => 'https://goeco.link/bAPhx',
                'status' => Book::STATUS_BOOK['COMPLETED'],
                'rating' => 'quantity: 0, ratingPoint: 0'
            ],
            [
                'name' => 'Mê Vợ Không Lối Về',
                'author' => 'Chiêu Tài Tiến Bảo',
                'genresList' => 'ngon-tinh, nguoc, sung',
                'collectionList' => 'truyen-hot, truyen-full',
                'categoryId' => 1,
                'slug' => 'me-vo-khong-loi-ve',
                'description' => 'Một cuộc giao dịch, cô mang thai con của người lạ, mang bụng bầu gả cho người đàn ông đã đính ước từ nhỏ. Vốn cho rằng chỉ là một cuộc giao dịch, lại dây dưa thứ tình cảm không nên có trong cuộc hôn nhân này. Mười tháng hoài thai sắp sinh, một tờ đơn ly hôn trên đất, cô mới hoàn toàn tình ngộ. Sau này anh ta nói "Bà xã về đi, người anh yêu luôn là em"',
                'bookCover' => 'https://goeco.link/EUdga',
                'status' => Book::STATUS_BOOK['COMPLETED'],
                'rating' => 'quantity: 0, ratingPoint: 0'
            ],
            [
                'name' => 'Đấu Phá Thương Khung',
                'author' => 'Thiên Tàm Thổ Đậu',
                'genresList' => 'tien-hiep, di-gioi, huyen-huyen',
                'collectionList' => 'truyen-hot, truyen-full',
                'categoryId' => 1,
                'slug' => 'dau-pha-thuong-khung',
                'description' => '<div class="desc-text desc-text-full" itemprop="description">Giới Thiệu Truyện<br><br>- <strong>Đấu Phá Thương Khung</strong> là một câu chuyện huyền huyễn đặc sắc kể về Tiêu Viêm, một thiên chi kiêu tử với thiên phú tu luyện mà ai ai cũng hâm mộ, bỗng một ngày người mẹ mất đi đễ lại di vật là một chiếc giới chỉ màu đen nhưng từ khi đó Tiêu Viêm đã mất đi thiên phú tu luyện của mình.<br><br>- Từ thiên tài rớt xuống làm phế vật trong 3 năm, rồi bị vị hôn thê thẳng thừng từ hôn, làm dấy lên ý chí nam nhi của mình, Tiêu Viêm nhờ di vật của mẫu thân để lại là 1 chiếc hắc giới chỉ (nhẫn màu đen)Tiêu Viêm gặp được hồn của Dược Lão (Dược Trần – Dược tôn giả) 1 đại luyện dược tông sư của đấu khí đại lục…<br><br>- Từ đó cuộc đời của Tiêu Viêm có những biến hóa gì? Gặp được các đại ngộ gì? Thân phận thật sự của Huân Nhi (thanh mai trúc mã lúc nhỏ của Tiêu Viêm) ra sao? Bí mật của gia tộc hắn là gì? Cùng theo dõi bộ truyện Đấu Phá Thương Khung để có thể giải đáp các thắc mắc này các bạn nhé!<br><br>- Tags: <strong>dau pha thuong khung full prc</strong>, truyen huyen huyen</div>',
                'bookCover' => 'https://goeco.link/szweK',
                'status' => Book::STATUS_BOOK['COMPLETED'],
                'rating' => 'quantity: 0, ratingPoint: 0'
            ],
            [
                'name' => 'Cô vợ ngọt ngào có chút bất lương (vợ mới bất lương có chút ngọt)',
                'author' => 'Quẫn Quẫn Hữu Yêu',
                'genresList' => 'ngon-tinh, trong-sinh, sung',
                'collectionList' => 'truyen-hot, truyen-full',
                'categoryId' => 1,
                'slug' => 'co-vo-ngot-ngao-co-chut-bat-luong-vo-moi-bat-luong-co-chut-ngot',
                'description' => '<div class="desc-text desc-text-full" itemprop="description"><b>Tên khác: </b>Cô Vợ Bất Lương Có Chút Ngọt Ngào<br><br>"Khẩu vị của người này rốt cuộc ra sao a! Cái này cũng bỏ được vào miệng à?"<br><br>Sau khi cô tỉnh dậy, nhìn vào trong gương thấy chính mình đầu xăm mặt giống như quỷ, cảm giác chỉ nhìn thêm một giây cũng hỏng đôi mắt.<br><br>Trước khi trọng sinh, Cố Việt Trạch chính là người mà cô dùng cả tấm lòng để yêu nhưng sau đó cũng là người mà cô hận thấu xương.<br><br>Đời trước cô chính là kiểu phụ nữ não tàn nên mới không muốn lây một ông xã tuyệt sắc, lại bị đôi tiện nam nữ hãm hại, bị người bạn thân nhất tẩy não, kết cục cuối cùng chính là không còn người nào muốn ở gần cô.<br><br>Đời này mặc cho các ngươi trâu bò rắn rết trăm phương nghìn kế, muốn cô ly dị, nhường đi ngôi vị phu nhân. Ngượng ngùng quá ~~, chỉ số thông minh của bản tiểu thư đã lên dây rồi nhé!</div>',
                'bookCover' => 'https://goeco.link/ddMtx',
                'status' => Book::STATUS_BOOK['COMPLETED'],
                'rating' => 'quantity: 0, ratingPoint: 0'
            ],
            [
                'name' => 'Nhất Niệm Vĩnh Hằng',
                'author' => 'Nhĩ Căn',
                'genresList' => 'tien-hiep, huyen-huyen',
                'collectionList' => 'truyen-hot, truyen-full',
                'categoryId' => 1,
                'slug' => 'nhat-niem-vinh-hang',
                'description' => '<div class="desc-text desc-text-full" itemprop="description"><b>一念永恒<br></b><br>Nhất niệm thành biển cả, nhất niệm hóa nương dâu.<br>Nhất niệm trảm nghìn Ma, nhất niệm giết vạn Tiên.<br><br>Chỉ có niệm của ta... là Vĩnh hằng.</div>',
                'bookCover' => 'https://goeco.link/dLAZJi',
                'status' => Book::STATUS_BOOK['COMPLETED'],
                'rating' => 'quantity: 0, ratingPoint: 0'
            ],
            [
                'name' => 'Đế Bá',
                'author' => 'Yếm Bút Yêu Sinh',
                'genresList' => 'huyen-huyen',
                'collectionList' => 'truyen-hot',
                'categoryId' => 1,
                'slug' => 'de-ba',
                'description' => '<div class="desc-text" itemprop="description">Ngàn vạn năm trước, Lý Thất Dạ trồng xuống một cây Thúy Trúc.<br><br>Tám trăm vạn năm trước, Lý Thất Dạ nuôi một đầu cá chép.<br><br>Năm trăm vạn năm trước, Lý Thất Dạ thu dưỡng một cái tiểu cô nương.<br><br>... ... ... ... ...<br><br>Hôm nay, Lý Thất Dạ tỉnh lại sau giấc ngủ, Thúy Trúc tu luyện thành thần linh, cá chép hóa thành Kim Long, tiểu cô nương trở thành Cửu Giới Nữ Đế.<br><br>Đây là cố sự về&nbsp;một&nbsp;tiểu tử&nbsp;bất tử Nhân tộc dưỡng thành Yêu Thần, dưỡng thành Tiên thú, dưỡng thành Nữ Đế...</div>',
                'bookCover' => 'https://goeco.link/zKrex',
                'status' => Book::STATUS_BOOK['COMPLETED'],
                'rating' => 'quantity: 0, ratingPoint: 0'
            ],
        ]);
    }
}
