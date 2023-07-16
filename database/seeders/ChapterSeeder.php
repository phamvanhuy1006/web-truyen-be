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
        $text = <<<EOT
        <div id="noi-dung">
            <p>‘Anh ngố’ nhìn chằm chằm vào nóc nhà được tạo thành từ cỏ dại và bùn trộn lẫn. Toàn thân hắn bao trùm bởi một cái áo bông ố vàng đã cũ, không thể nhìn ra màu sắc ban đầu, phảng phất một ít mùi ẩm mốc.</p>
            <p>Nằm bên cạnh hắn là nhị ca Hàn Chú, đang ngủ rất say sưa. Thỉnh thoảng phát ra tiếng ngáy nhè nhẹ.</p>
            <p>Cách giường chừng nửa trượng là một vách tường đất đổ nát. Vì thời gian đã quá lâu, trên vách đã xuất hiện vài vết nứt dài. Từ những khe nứt đó, loáng thoáng truyền đến thanh âm oán thán của Hàn mẫu, còn có thanh âm Hàn phụ đang hút thuốc rất là hấp dẫn.</p>
            <p>'Anh ngố' từ từ nhắm đôi mắt có chút bức bối lại, muốn nhanh chóng chìm vào giấc ngủ sâu, trong lòng hắn biết rõ ràng, nếu không ngủ ngay, ngày mai không thể nào dậy sớm được, cũng không thể kịp cùng đi đốn củi với đám bạn của hắn.</p>
            <p>‘Anh ngố’ họ Hàn tên Lập, loại danh tự có ý nghĩa như thế này cha mẹ hắn không có khả năng nghĩ ra. Cái này là do cha hắn dùng rượu oa đầu chế bởi thô lương, cầu lão Trương trong thôn đặt cho.</p>
            <p>Lão Trương khi còn trẻ, đã từng làm thư đồng mấy năm cho một nhà có tiền trong thành, là người duy nhất trong thôn nhận biết được vài chữ. Tên gọi của hầu hết tiểu hài tử trong thôn, đều do lão Trương đặt cho.</p>
            <p>Hàn Lập bị người trong thôn gọi là ‘anh ngố’ không phải là do hắn ngốc nghếch gì. Trái lại, hắn còn là đứa trẻ thông minh nhất làng, bề ngoài trông hắn so với những đứa trẻ khác không có gì khác biệt. Trừ những người trong nhà ra, hắn rất ít khi nghe thấy nguời ta gọi tên chính thức Hàn Lập của hắn, mà hầu như chỉ là ‘anh ngố’, và mọi người vẫn gọi hắn bằng cái tên ‘anh ngố’ này cho đến tận bây giờ.</p>
            <p>Sở dĩ Hàn Lập bị mọi người ban cho hỗn danh ‘anh ngố’ là vì trong thôn vốn đã có một ‘anh ngốc’ rồi.</p>
            <p>Điều này cũng không có gì to tát cả, tất cả những đứa trẻ khác trong thôn đều có hỗn danh như ‘cẩu oa’ hay ‘nhị đản’, so với danh tự ‘anh ngố’ thì còn khó nghe hơn.</p>
            <p>Cũng bởi như vậy, mặc dù Hàn Lập không thích cách xưng hô này nhưng cũng chỉ có thể tự an ủi bản thân mà thôi.</p>
            <p>Hàn Lập bề ngoài trông không được vừa mắt, da tay thì đen đúa, đích thực là một đứa trẻ bình thường chốn làng quê. Tuy nhiên, nội tâm của hắn thì không hề nông nổi, so với những đứa bé cùng lứa tuổi thì chín chắn hơn nhiều. Hắn từ nhỏ đã hướng tới thế giới phồn hoa bên ngoài, mơ mộng có một ngày có thể ra khỏi thôn làng, ngắm nhìn thế giới phù hoa mà lão Trương thường nói đến.</p>
            <p>Khi có ý tưởng này, Hàn Lập không đề cập cho người khác biết. Nếu không, nhất định làm cho mọi người trong thôn cảm thấy ngạc nhiên. Một tiểu hài tử miệng còn chưa hết mùi sữa, đã mơ tưởng đến những ý nghĩ xa vời mà ngay cả đám người lớn cũng chưa hề nghĩ đến. Phải biết rằng, những đứa trẻ khác cùng tầm tuổi với Hàn Lập thì chỉ biết đuổi gà, bắt chó, tất nhiên là ở đây không nói đến những kẻ có ý nghĩ tha huơng cầu thực.</p>
            <p>Gia đình Hàn Lập có bảy miệng ăn, trên hắn còn có hai vị huynh trưởng, một tỷ tỷ, hắn trong nhà đứng thứ tư, ngoài ra hắn còn có một tiểu muội muội nữa. Năm nay hắn mới mười tuổi, gia cảnh bần hàn, cả năm cũng không có mấy bữa được ăn no. Người trong nhà cũng chỉ mong được ăn đủ no, được mặc đủ ấm.</p>
            <p>Hàn Lập lúc này, đang mơ mơ màng màng, sắp chìm vào giấc ngủ, trong đầu vẫn còn phảng phất ý niệm: ngày mai lên núi, nhất định sẽ mang về cho tiểu muội muội mà hắn yêu thương nhất thật nhiều hồng tương quả, loại quả mà muội muội hắn thích nhất.</p>
            <p>Giữa trưa ngày thứ hai, Hàn Lập dưới ánh nắng chói trang, lưng gùi bó củi cao bằng nửa người hắn, trước ngực ôm một nắm đầy hồng tương quả, đang từ trên núi trở về. Lúc này, hắn không biết rằng trong nhà đang có một vị khách đến chơi, mà vị khách này, chính là người cải biến vận mệnh của hắn.</p>
            <p>Vị khách quý này, cùng hắn có mối quan hệ huyết thống rất gần, ông ta chính là tam thúc ruột của hắn.</p>
            <p>Nghe nói, thúc thúc hắn làm việc ở tửu lâu tiểu thành phụ cận, được ông chủ tín nhiệm đề bạt làm đại chưởng quỹ, chính là người mà cha mẹ hắn thường kể. Hàn gia trong vòng trăm năm trở lại đây, mới xuất hiện một người như tam thúc của Hàn Lập.</p>
            <p>Hàn Lập từ nhỏ đến giờ, gặp mặt vị tam thúc này cũng chỉ vài lần. Đại ca của hắn được đi theo một lão thợ rèn trong thành để học việc cũng là do vị tam thúc này giới thiệu. Vị tam thúc này còn thường xuyên giấu mọi người cấp cho cha mẹ hắn đồ ăn thức uống, chiếu cố tận tình gia đình hắn. Chính vì vậy, ấn tượng của Hàn Lập đối với vị tam thúc này vô cùng tốt, hắn cũng biết rằng tuy cha mẹ hắn không nói ra miệng nhưng trong thâm tâm cũng rất cảm kích.</p>
            <p>Đại ca hắn chính là niềm kiêu hãnh của cả nhà. Nghe nói làm thợ rèn học đồ, không kể ăn ở, mỗi tháng còn nhận được ba mươi đồng bạc trắng. Đợi đến lúc xuất sư, có người thuê thì tiền kiếm được còn nhiều hơn nữa.</p>
            <p>Mỗi khi cha mẹ đề cập đến đại ca, thần thái đều bay bổng, trông khác hẳn so với thường ngày. Hàn Lập tuổi tuy nhỏ, nhưng cũng hâm mộ không thôi, công việc vừa lòng sớm đã nhắm đến rồi, đó chính là theo một vị thủ nghệ sư phó trong tiểu thành học tập nấu ăn, sau đó sẽ trở thành một người nấu ăn có tay nghề.</p>
            <p>Ngay khi Hàn Lập nhìn thấy một người toàn thân diện y phục mới, khuôn mặt béo tròn, thì biết ngay đó là tam thúc của mình, nội tâm vô cùng hưng phấn.</p>
            <p>Bỏ đám củi ra sau nhà xong, hắn liền vào nhà tham kiến tam thúc, ngoan ngoãn cất tiếng chào: “Tam thúc hảo”, sau đó đứng yên một bên, nghe phụ mẫu và tam thúc nói chuyện phiếm.</p>
            <p>Tam thúc cười cười nhìn Hàn Lập, đánh giá hắn một hồi, luôn miệng khen hắn những câu như là "nghe lời" với "hiểu việc", sau đó tiếp tục quay sang trò chuyện với phụ mẫu hắn về mục đích chuyến đi lần này của lão.</p>
            <p>Hàn Lập tuổi còn nhỏ, chưa tiếp xúc thế giới bên ngoài làng bao giờ nên khi nghe tam thúc nói chuyện hắn cũng không hiểu hết, chỉ nắm đại khái mà thôi.</p>
            <p>Thì ra tam thúc của hắn làm việc ở một tiểu lâu, mà tiểu lâu này thuộc về một bang phái giang hồ là Thất Huyền môn. Môn phái này phân ra ngoại môn và nội môn. Cách đây không lâu, tam thúc của hắn đã chính thức trở thành đệ tử ngoại môn của môn phái, đồng thời có thể đứng ra đề cử hài đồng từ bảy đến mười hai tuổi tham gia khảo nghiệm chiêu thu đệ tử của Thất Huyền môn.</p>
            <p>Cứ năm năm một lần, Thất Huyền môn lại tổ chức kỳ thi chiêu lãm đệ tử, mà cuộc thi này sẽ được tổ chức trong tháng tới. Với một người khôn khéo, nhanh nhạy lại không có con cái, tự nhiên lão lập tức nghĩ đến đứa cháu Hàn Lập có độ tuổi thích hợp rồi.</p>
            <p>Cha của Hàn Lập vốn tính cách thận trọng, nghe đến những từ như "giang hồ", "môn phái", trong lòng có chút do dự, không đưa ra được chủ ý, liền vớ ngay lấy điếu cày, rít lên mấy tiếng huýt huýt, sau đó ngồi yên tại chỗ suy nghĩ, không nói câu gì nữa.</p>
            <p>Theo như lời tam thúc thì trong phương viên mấy trăm dặm, Thất Huyền môn là môn phái xếp thứ nhất, thứ hai gì đó.</p>
            <p>Chỉ cần trở thành đệ tử nội môn, chẳng những sau này vừa miễn phí tập võ, vừa không phải lo lắng chuyện ăn ở, mà mỗi tháng còn kiếm được một hai lượng bạc lẻ nữa. Hơn nữa cho dù không trúng tuyển trở thành đệ tử nội môn, thì cũng có hi vọng trở thành đệ tử ngoại môn giống như tam thúc của hắn, chuyên lo việc sinh ý cho Thất Huyền môn.</p>
            <p>Nghe đến có khả năng mỗi tháng kiếm được một hai lượng bạc trắng, lại còn có cơ hội trở thành người như tam thúc, Hàn phụ cuối cùng cũng đưa ra quyết định, đáp ứng lời đề nghị của tam thúc.</p>
            <p>Tam thúc thấy Hàn phụ đáp ứng rồi, trong lòng rất cao hứng, liền lưu lại vài lượng bạc, nói tháng sau sẽ đến dẫn Hàn Lập đi, trong khoảng thời gian này, cho hắn ăn uống tốt một chút, bồi bổ thân thể để còn có thể tham gia ứng thí. Cuối cùng, tam thúc cùng cha mẹ hắn chào tạm biệt nhau, xoa xoa đầu hắn rồi ra khỏi cửa đi về.</p>
            <p>Hàn Lập mặc dù không hiểu hết những gì tam thúc vừa nói, nhưng có khả năng vào thành, có thể kiếm tiền thì hắn hiểu được.</p>
            <p>Nguyện vọng của hắn từ trước đến nay, mắt thấy có thể thực hiện được, mấy buổi tối kế tiếp, Hàn Lập hưng phấn tới mức ngủ không yên.</p>
            <p>Một tháng sau, tam thúc của hắn theo đúng thời gian ước định quay lại thôn để dẫn Hàn Lập đi. Trước khi đi, Hàn phụ dặn dò, động viên, chúc phúc Hàn Lập: "Làm người phải thành thật, gặp chuyện thì nên nhẫn nhịn, không nên cùng người khác tranh chấp..." mà Hàn mẫu dặn hắn cần phải chú ý thân thể, ăn ngủ cho tốt.</p>
            <p>Ngồi trên xe ngựa, nhìn thân ảnh cha mẹ xa dần, Hàn Lập mím môi, cố gắng kìm nén không để nước mắt chảy ra ngoài.</p>
            <p>Tuy chín chắn hơn so với những đứa trẻ cùng trang lứa nhưng dù sao thì hắn vẫn còn là một đứa trẻ mười tuổi. Lần đầu tiên xa nhà khiến hắn cảm thấy có chút bàng hoàng, thương cảm. Trong tâm lý còn non dại đã hạ quyết tâm, đợi đến khi kiếm được nhiều tiền rồi sẽ ngay lập tức rong ngựa trở về với cha mẹ, không xa rời nhau nữa.</p>
            <p>Hàn Lập từ trước giờ không có nghĩ đến, chỉ là sau khi rời khỏi thôn làng hắn mới nhận ra, tiền đã không còn ý nghĩa với hắn như lúc trước nữa rồi. Mà hắn mặc nhiên không biết rằng, con đường vận mệnh của hắn không giống như những người bình thường. Con đường tu tiên của hắn bắt đầu từ đây.</p>
        </div>
        EOT;
        DB::table('chapters')->insert([
            [
                'name' => 'Sơn biên tiểu thôn',
                'bookSlug' => 'pham-nhan-tu-tien',
                'content' => $text,
                'chapterOrder' => 1,
                'slug' => 'chuong-1'
            ],
            [
                'name' => 'Thanh Ngưu Trấn',
                'bookSlug' => 'pham-nhan-tu-tien',
                'content' => $text,
                'chapterOrder' => 2,
                'slug' => 'chuong-2'
            ],
            [
                'name' => 'Sơn biên tiểu thôn',
                'bookSlug' => 'than-dao-dan-ton',
                'content' => $text,
                'chapterOrder' => 1,
                'slug' => 'chuong-1'
            ],
            [
                'name' => 'Thanh Ngưu Trấn',
                'bookSlug' => 'than-dao-dan-ton',
                'content' => $text,
                'chapterOrder' => 2,
                'slug' => 'chuong-2'
            ],
            [
                'name' => 'Sơn biên tiểu thôn',
                'bookSlug' => 'linh-vu-thien-ha',
                'content' => $text,
                'chapterOrder' => 1,
                'slug' => 'chuong-1'
            ],
            [
                'name' => 'Thanh Ngưu Trấn',
                'bookSlug' => 'linh-vu-thien-ha',
                'content' => $text,
                'chapterOrder' => 2,
                'slug' => 'chuong-2'
            ],
            [
                'name' => 'Sơn biên tiểu thôn',
                'bookSlug' => 'me-vo-khong-loi-ve',
                'content' => $text,
                'chapterOrder' => 1,
                'slug' => 'chuong-1'
            ],
            [
                'name' => 'Thanh Ngưu Trấn',
                'bookSlug' => 'me-vo-khong-loi-ve',
                'content' => $text,
                'chapterOrder' => 2,
                'slug' => 'chuong-2'
            ],
            [
                'name' => 'Sơn biên tiểu thôn',
                'bookSlug' => 'dau-pha-thuong-khung',
                'content' => $text,
                'chapterOrder' => 1,
                'slug' => 'chuong-1'
            ],
            [
                'name' => 'Thanh Ngưu Trấn',
                'bookSlug' => 'dau-pha-thuong-khung',
                'content' => $text,
                'chapterOrder' => 2,
                'slug' => 'chuong-2'
            ],
            [
                'name' => 'Sơn biên tiểu thôn',
                'bookSlug' => 'co-vo-ngot-ngao-co-chut-bat-luong-vo-moi-bat-luong-co-chut-ngot',
                'content' => $text,
                'chapterOrder' => 1,
                'slug' => 'chuong-1'
            ],
            [
                'name' => 'Thanh Ngưu Trấn',
                'bookSlug' => 'co-vo-ngot-ngao-co-chut-bat-luong-vo-moi-bat-luong-co-chut-ngot',
                'content' => $text,
                'chapterOrder' => 2,
                'slug' => 'chuong-2'
            ],
            [
                'name' => 'Sơn biên tiểu thôn',
                'bookSlug' => 'nhat-niem-vinh-hang',
                'content' => $text,
                'chapterOrder' => 1,
                'slug' => 'chuong-1'
            ],
            [
                'name' => 'Thanh Ngưu Trấn',
                'bookSlug' => 'nhat-niem-vinh-hang',
                'content' => $text,
                'chapterOrder' => 2,
                'slug' => 'chuong-2'
            ],
            [
                'name' => 'Sơn biên tiểu thôn',
                'bookSlug' => 'de-ba',
                'content' => $text,
                'chapterOrder' => 1,
                'slug' => 'chuong-1'
            ],
            [
                'name' => 'Thanh Ngưu Trấn',
                'bookSlug' => 'de-ba',
                'content' => $text,
                'chapterOrder' => 2,
                'slug' => 'chuong-2'
            ],
        ]);
    }
}
