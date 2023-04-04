<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PhimSeeder extends Seeder
{
    public function run()
    {
        // 1. Khi seeder thì ta muốn xóa toàn bộ dữ liệu ở table đó
        DB::table('phims')->delete();

        // Reset id về lại 1
        DB::table('phims')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('phims')->insert([
            [
                'ten_phim'          => "SIÊU LỪA GẶP SIÊU LẦY",
                'slug_ten_phim'     => "sieu_lua_gap_sieu_lay",
                'dao_dien'          => "Võ Thanh Hòa",
                'dien_vien'         => "Anh Tú, Mạc Văn Khoa, Ngọc Phước, Nhất Trung, NSƯT Mỹ Duyên, Đại Nghĩa, Lâm Vỹ Dạ, BB Trần, Cát Tường, Hứa Minh Đạt…",
                'the_loai'          => "Hài, Hành Động",
                'thoi_luong'        => 120,
                'ngay_khoi_chieu'   => "2022-12-23",
                'avatar'            => "https://media.lottecinemavn.com/Media/MovieFile/MovieImg/202303/11020_103_100008.jpg",
                'mo_ta'             => "Thuộc phong cách hành động – hài hước với các “cú lừa” thông minh và lầy lội đến từ bộ đôi Tú (Anh Tú) và Khoa (Mạc Văn Khoa), Siêu Lừa Gặp Siêu Lầy của đạo diễn Võ Thanh Hòa theo chân của Khoa – tên lừa đảo tầm cỡ “quốc nội” đến đảo ngọc Phú Quốc với mong muốn đổi đời. Tại đây, Khoa gặp Tú – tay lừa đảo “hàng real” và cùng Tú thực hiện các phi vụ từ nhỏ đến lớn. Cứ ngỡ sự ranh mãnh của Tú và sự may mắn trời cho của Khoa sẽ giúp họ trở thành bộ đôi bất khả chiến bại, nào ngờ lại đối mặt với nhiều tình huống dở khóc – dở cười. Nhất là khi băng nhóm của bộ đôi nhanh chóng mở rộng vì sự góp mặt của ông Năm (Nhất Trung) và bé Mã Lai (Ngọc Phước).",
                'trailer'           => "https://www.youtube.com/watch?v=ecNMIlP7wIs",
                'tinh_trang'        => 2,
            ],

            [
                'ten_phim'          => "TRI KỶ",
                'slug_ten_phim'     => "tri-ky",
                'dao_dien'          => "Young-Keun Min",
                'dien_vien'         => "Kim Da-mi, Woo-Seok Byeon, Nam Yoon-Su, So-nee Jeon, Kim Soo Hyung",
                'the_loai'          => "Hồi hộp, Tâm Lý",
                'thoi_luong'        => 90,
                'ngay_khoi_chieu'   => "2022-12-23",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/s/o/soulmate-_vietnamese_poster.jpg",
                'mo_ta'             => "Soulmate (tựa Việt: Tri Kỷ) là câu chuyện về Mi So (Kim Da Mi thủ vai) và Ha Eun (Jeon So Nee thủ vai) trong một mối quan hệ chồng chéo chất chứa những hạnh phúc, nỗi buồn, rung động và cả biệt ly. Từ giây phút đầu tiên gặp nhau dưới mái trường tiểu học, giữa hai cô gái đã hình thành một sợi dây liên kết đặc biệt. Và khi Ham Jin Woo (Byun Woo Seok thủ vai) bước vào giữa cả hai, đó cũng là lúc những vết nứt trong mối quan hệ của Mi So và Ha Eun xuất hiện.",
                'trailer'           => "https://www.youtube.com/watch?v=K46K_1yTwUg",
                'tinh_trang'        => 2,
            ],

            [
                'ten_phim'          => "SHAZAM! CƠN THỊNH NỘ CỦA CÁC VỊ THẦN",
                'slug_ten_phim'     => "shazam_con_thinh_no_cua_cac_vi_than",
                'dao_dien'          => "David F. Sandberg",
                'dien_vien'         => "Zachary Levi, Asher Angel, Jack Dylan Grazer, Adam Brody, Ross Butler, Meagan Good, D.J. Cotrona, Grace Caroline Currey, Faithe Herman, Ian Chen, Jovan Armand, Marta Milans, Cooper Andrews, Djimon Hounsou",
                'the_loai'          => "Hành Động, Phiêu Lưu",
                'thoi_luong'        => 100,
                'ngay_khoi_chieu'   => "2022-12-30",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/s/h/shazam_fotg_payoff_poster_1_.jpg",
                'mo_ta'             => "Một tác phẩm từ New Line Cinema mang tên “Shazam! Fury of the Gods,” tiếp tục câu chuyện về chàng trai Billy Batson, và bản ngã Siêu anh hùng trưởng thành của mình sau khi hô cụm từ SHAZAM !, ma thuật.",
                'trailer'           => "https://www.youtube.com/watch?v=lPmzBaNJUzI",
                'tinh_trang'        => 2,
            ],

            [
                'ten_phim'          => "THANH GƯƠM DIỆT QUỶ: ĐƯỜNG ĐẾN LÀNG RÈN GƯƠM",
                'slug_ten_phim'     => "thanh_guom_diet_quy_duong_den_lang_ren_guom",
                'dao_dien'          => "Haruo Sotozaki",
                'dien_vien'         => "Natsuki Hanae, Akari Kito, Hiro Shimono, Yoshitsugu Matsuoka, Katsuyuki Konishi, Kengo Kawanishi, Kana Hanazawa",
                'the_loai'          => "Hành Động, Hoạt Hình",
                'thoi_luong'        => 110,
                'ngay_khoi_chieu'   => "2023-03-22",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/d/e/demon-slayer-poster.jpg",
                'mo_ta'             => "Thanh Gươm Diệt Quỷ: Đường Đến Làng Rèn Gươm sẽ tái hiện trận chiến khốc liệt nhất tại Phố Đèn Đỏ trong tập 10 và 11 giữa Tanjiro, Sound Hashira, Tengen Uzui với anh em Thượng Huyền Lục - Daki và Gyutaro lần đầu tiên trên màn ảnh rộng. Bên cạnh đó, phim sẽ công chiếu tập 1 của Làng Rèn Gươm: Sau trận chiến khốc liệt với anh em quỷ Thượng Huyền Lục Gyuutarou và Daki tại Phố Đèn Đỏ, Tanjiro và các kiếm sĩ diệt quỷ đều bị thương nặng và được đưa trở về trụ sở của Đội Diệt Quỷ để dưỡng thương và phục hồi. Sau trận chiến, thanh gươm của Tanjiro cũng bị hư hỏng nặng và lúc này, cậu cần một thanh gươm mới để tiếp tục lên đường làm nhiệm vụ. Cậu được đưa đến Làng Rèn Gươm, nơi phụ trách rèn vũ khí cho các kiếm sĩ của Đội Diệt Quỷ và chuẩn bị cho trận chiến mới với các thành viên mạnh nhất trong hàng Thượng Huyền của Thập Nhị Quỷ Nguyệt.",
                'trailer'           => "https://www.youtube.com/watch?v=IbyYUvLZ6fM",
                'tinh_trang'        => 1,
            ],

            [
                'ten_phim'          => "CREED III: TAY ĐẤM HUYỀN THOẠI",
                'slug_ten_phim'     => "creed_iii_tay_dam_huyen_thoai",
                'dao_dien'          => "Michael B. Jordan",
                'dien_vien'         => "Michael B. Jordan, Tessa Thompson, Jonathan Majors, Wood Harris, Phylicia Rashad, Mila Davis-Kent, Jose Benavidez, Selenis Leyva, Florian Munteanu",
                'the_loai'          => "Tâm Lý",
                'thoi_luong'        => 155,
                'ngay_khoi_chieu'   => "2023-03-24",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/p/o/poster_creed.jpg",
                'mo_ta'             => "Sau khi thống trị thế giới quyền anh, Adonis Creed đã phát triển mạnh mẽ trong cả sự nghiệp và cuộc sống gia đình. Khi một người bạn thời thơ ấu và cựu thần đồng quyền anh, Damian (Jonathan Majors), tái xuất sau khi thụ án tù dài hạn, anh ta háo hức chứng minh rằng mình xứng đáng được trở lại võ đài. Cuộc chạm trán giữa những người bạn cũ không chỉ là một cuộc chiến trên võ đài thông thường. Để có thể chiến thắng, Adonis phải đặt tương lai của mình lên trên hết để chiến đấu với Damian — một võ sĩ không còn gì để mất.",
                'trailer'           => "https://www.youtube.com/watch?v=5zwqo4pcIEE",
                'tinh_trang'        => 1,
            ],

            [
                'ten_phim'          => "KHÓA CHẶT CỬA NÀO SUZUME",
                'slug_ten_phim'     => "khoa_chat_cua_nao_suzume",
                'dao_dien'          => "Makoto Shinkai",
                'dien_vien'         => "Jonathan Majors, Wood Harris, Phylicia Rashad, Mila Davis-Kent, Jose Benavidez, Selenis Leyva",
                'the_loai'          => "Hoạt Hình, Phiêu Lưu",
                'thoi_luong'        => 155,
                'ngay_khoi_chieu'   => "2023-03-10",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/s/u/suzume_vn_teaser_poster.jpg",
                'mo_ta'             => "Khóa Chặt Cửa Nào Suzume kể câu chuyện khi Suzume vô tình gặp một chàng trai trẻ đến thị trấn nơi cô sinh sống với mục đích tìm kiếm một cánh cửa. Để bảo vệ Nhật Bản khỏi thảm họa, những cánh cửa rải rác khắp nơi phải được đóng lại, và bất ngờ thay Suzume cũng có khả năng đóng cửa đặc biệt này. Từ đó cả hai cùng nhau thực hiện sự mệnh khóa chặt cửa!",
                'trailer'           => "https://www.youtube.com/watch?v=CTxLZYbT9Rw",
                'tinh_trang'        => 1,
            ],

            [
                'ten_phim'          => "CUỘC CHIẾN ĐA VŨ TRỤ",
                'slug_ten_phim'     => "cuoc_chien_dja_vu_tru",
                'dao_dien'          => "Daniel Kwan, Daniel Scheinert",
                'dien_vien'         => "Dương Tử Quỳnh, Quan Kế Huy, Stephanie Hsu, James Hong, Jamie Lee Curtis,...",
                'the_loai'          => "Khoa Học Viễn Tưởng, Thần thoại",
                'thoi_luong'        => 155,
                'ngay_khoi_chieu'   => "2023-03-17",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/c/u/cu_c_chi_n_a_v_tr_-_payoff_poster_-_k_ch_th_c_fb_-_dkkc_24062022_1_.jpg",
                'mo_ta'             => "Một phụ nữ trung niên nhập cư người Trung Quốc bị cuốn vào một cuộc phiêu lưu điên cuồng, nơi cô ấy một mình giải cứu thế giới bằng cách khám phá các vũ trụ khác và các bản thể khác của chính cô.",
                'trailer'           => "https://www.youtube.com/watch?v=py9yPMJhPfI",
                'tinh_trang'        => 2,
            ],

            [
                'ten_phim'          => "VONG HỒN RƯỚC LỄ",
                'slug_ten_phim'     => "vong_hon_ruoc_le",
                'dao_dien'          => "Victor Garcia",
                'dien_vien'         => "Carla Campra, Aina Quiñones, Marc Soler",
                'the_loai'          => "Kinh Dị",
                'thoi_luong'        => 155,
                'ngay_khoi_chieu'   => "2023-03-17",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/7/0/700x1000-communion_girl.jpg",
                'mo_ta'             => "Dựa trên truyền thuyết đô thị kinh dị bậc nhất Tây Ban Nha, Vong Hồn Rước Lễ kể về hồn ma ác nghiệt trú ngụ trong thân xác của một con búp bê. Bối cảnh phim diễn ra ở Tây Ban Nha vào cuối thập niên 1980. Sara (Carla Campra) vừa chuyển nhà tới một thị trấn nhỏ khép kín ở tỉnh Tarrgona và đang tìm cách hoà nhập với bạn bè cùng lứa tại đây. Tuy nhiên, chỉ có cô nàng hướng ngoại Rebe (Aina Quiñones) là người sẵn lòng kết giao với Sara. Một hôm, cả hai rủ nhau đi chơi ở một câu lạc bộ đêm và về nhà rất muộn. Trên đường về, họ đụng phải một cô gái nhỏ mặc váy trắng, tay cầm theo con búp bê. Từ thời khắc đó, cơn ác mộng mới thực sự bắt đầu.",
                'trailer'           => "https://www.youtube.com/watch?v=V5tNUk2Zi8Q",
                'tinh_trang'        => 1,
            ],

            [
                'ten_phim'          => "65 - TRẬN CHIẾN THỜI TIỀN SỬ",
                'slug_ten_phim'     => "65_tran_chien_thoi_tien_su",
                'dao_dien'          => "Scott Beck, Bryan Woods",
                'dien_vien'         => "Adam Driver, Ariana Greenblatt, Chloe Coleman…",
                'the_loai'          => "Kinh Dị, Phiêu Lưu",
                'thoi_luong'        => 155,
                'ngay_khoi_chieu'   => "2023-03-10",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/p/o/poster_50x70_2_.jpg",
                'mo_ta'             => "Sau cú va chạm thảm khốc, tàu vũ trụ của Mills (Adam Driver) bay thẳng đến một hành tinh không xác định. Với kiến thức nhạy bén của mình, Mills nhanh chóng nhận ra hành tinh không xác định này chính là Trái Đất của 65 triệu năm trước. Liệu với những công nghệ tương lai đang có, Mills có thể sống sót trước những loài khủng long và sinh vật tiền sử đáng sợ? 65 - Trận Chiến Thời Tiền Sử đến từ bộ đôi biên kịch từng tạo nên “A Quiet Place” và được nhào nặn bởi chính NSX nổi tiếng Sam Raimi. Và, với vai chính được thủ vai bởi diễn viên từng đoạt giải Oscar - Adam Driver.",
                'trailer'           => "https://www.youtube.com/watch?v=5ieCIed2At0",
                'tinh_trang'        => 1,
            ],

            [
                'ten_phim'          => "TÌM NHÀ CHO BOSS",
                'slug_ten_phim'     => "tim_nha_cho_boss",
                'dao_dien'          => "Kim Joo Hwan",
                'dien_vien'         => "Cha Tae Hyun, Yoo Yeon Seok,....",
                'the_loai'          => "Hài, Tâm Lý",
                'thoi_luong'        => 155,
                'ngay_khoi_chieu'   => "2023-03-17",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/t/n/tncb_4x5.jpg",
                'mo_ta'             => "Chuyến hành trình đi tìm chủ mới cho chú chó Runie cùng những tình huống dở khóc dở cười của hai anh em Jin Guk và Min Su.",
                'trailer'           => "https://www.youtube.com/watch?v=nP5ZLApjkdw",
                'tinh_trang'        => 2,
            ],

            [
                'ten_phim'          => "MẤT TÍCH",
                'slug_ten_phim'     => "mat_tich",
                'dao_dien'          => "Nick Johnson, Will Merrick",
                'dien_vien'         => "Storm Reid, Nia Long, Joaquim de Almeida, Tim Griffin, Daniel Henney, Amy Landecker",
                'the_loai'          => "Hồi hộp, Tâm Lý",
                'thoi_luong'        => 155,
                'ngay_khoi_chieu'   => "2023-02-24",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/a/4/a4-min.jpg",
                'mo_ta'             => "Những người từng tạo ra SEARCHING đã trở lại với MISSING ! “Missing” bắt đầu khi Grace (Nia Long) cùng bạn trai Kevin Lin (Ken Leung) đi du lịch Colombia. Sau vài ngày không liên lạc, cô con gái Ali (Storm Reid) bàng hoàng nhận ra mẹ mình đã mất tích một cách bí ẩn. Hết cách, Ali đành phải cố đăng nhập vào các tài khoản liên lạc hay mạng xã hội của mẹ để tìm manh mối. Cô dần khám phá ra những bí mật đen tối mà Grace che giấu suốt bấy lấu. Hàng loạt câu hỏi ập xuống đầu cô gái trẻ. Những mối quan hệ xã hội của Grace là ai? Thân phận thật sự của Kevin là gì? Liệu gã có phải tội phạm và lên kế hoạch bắt cóc Grace?",
                'trailer'           => "https://www.youtube.com/watch?v=7E1VgtDLaPk",
                'tinh_trang'        => 2,
            ],

            [
                'ten_phim'          => "ĐẢO TỘI ÁC",
                'slug_ten_phim'     => "djao_toi_ac",
                'dao_dien'          => "Eu Ho",
                'dien_vien'         => "Alif Satar, Amelia Henderson, Ikmal Amry, Evie Feroz",
                'the_loai'          => "Kinh Dị",
                'thoi_luong'        => 155,
                'ngay_khoi_chieu'   => "2023-03-31",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/4/x/4x5-dao-toi-ac.jpg",
                'mo_ta'             => "Nhóm du khách trẻ vô tình phá bỏ phong ấn của con quái vật khát máu khi đến tham quan một hòn đảo cấm không dân địa phương nào dám đặt chân đến. Liệu họ có thể bình an thoát khỏi hay đó sẽ là nơi chôn vùi tất cả?",
                'trailer'           => "https://www.youtube.com/watch?v=8xk-X2AOr1U",
                'tinh_trang'        => 2,
            ],

            [
                'ten_phim'          => "BIG GEORGE FOREMAN",
                'slug_ten_phim'     => "big_george_foreman",
                'dao_dien'          => "George Tillman Jr.",
                'dien_vien'         => "Forest Whitaker, Sonja Sohn, Sam Trammell",
                'the_loai'          => "Tâm Lý, Tiểu Sử",
                'thoi_luong'        => 155,
                'ngay_khoi_chieu'   => "2023-04-28",
                'avatar'            => "https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/b/i/big_george_foreman_-_cgv.jpg",
                'mo_ta'             => "BIG GEORGE FOREMAN. Câu chuyện kỳ diệu về huyền thoại vô địch Quyền Anh hạng nặng thế giới. Phim dự kiến khởi chiếu 28.04.2023",
                'trailer'           => "https://www.youtube.com/watch?v=urKDu40iaXk",
                'tinh_trang'        => 2,
            ],
        ]);
        // php artisan db:seed --class="PhimSeeder"
    }
}
