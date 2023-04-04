<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Khi seeder thì ta muốn xóa toàn bộ dữ liệu ở table đó
        DB::table('quan_ly_bai_viets')->delete();

        // Reset id về lại 1
        DB::table('quan_ly_bai_viets')->truncate();

        // 2. Ta sẽ thêm mới phim bằng lệnh create
        DB::table('quan_ly_bai_viets')->insert([
            [
                'tieu_de'          => "Bí mật ngầm của Hollywood: Thiệt hại nhiều nhất là động vật",
                'mo_ta_ngan'       => "Hollywood là nơi gây ra nhiều tội ác đối với động vật. Mọi chuyện bắt đầu khi năm 2011 có thông tin nói rằng chú hổ đóng trong Life Of Pi suýt chết đuối khi đóng phim. Chỉ một năm sau, đạo diễn của The Hobbit là Peter Jackson, gây ra cái chết của 27 động vật trang trại, bao gồm cừu và dê.",
                'noi_dung'         => "Ngoài ra, trong quá trình quay phần đầu tiên của Cướp Biển Vùng Carribean, đội ngũ sản xuất đã không thực hiện các biện pháp phòng ngừa, bảo vệ sinh vật biển khỏi các hiệu ứng cháy nổ, khiến hàng chục sinh vật như mực, cá bị chết trôi trên biển. Các diễn viên có khả năng dính vào những vụ bê bối tình ái trong quá trình quay phim Các diễn viên thường sẽ phải di chuyển đến phim trường hoặc bối cảnh,
                                        và họ sẽ ở đó thường xuyên với bạn diễn của mình. Đây chính là cách để nhà làm phim tạo cho họ sự tương tác, thấu hiểu nhau để quá trình quay phim diễn ra dễ dàng hơn. Tuy nhiên, “lửa gần rơm thì lâu ngày cũng cháy”, nhiều trường hợp diễn viên sẽ nảy sinh tình cảm với bạn diễn ngoài ý muốn là chuyện bình thường. Đó là trường hợp của Johnny Depp khi quay bộ phim The Rum Diary cùng với Amber Heard và cả hai sau đó đã chính thức kết hôn với nhau, mặc dù “Cướp biển vùng Carribean” đã có mối quan hệ 17 năm với Vanessa Paradis.",
                'hinh_anh'         => "https://static1.dienanh.net/upload/202302/8817e21b-63d3-4cb2-aceb-38c93651d987.jpg, https://static1.dienanh.net/upload/202302/8c3f9c30-f382-4784-a651-ad443cbc1379.jpg",
                'is_open'          => 1,
            ],

            [
                'tieu_de'          => "Nguồn gốc của Vibranium và Adamantium trong vũ trụ Marvel",
                'mo_ta_ngan'       => "Mặc dù trong vũ trụ Marvel có rất nhiều dạng vật chất khác nhau với đủ thứ công dụng, nhưng xét về mặt “kim loại” thì ngoài Uru, có vẻ Vibranium và Adamantium sẽ là những thứ được điểm mặt chỉ tên nhiều nhất nhỉ? Vậy, nguồn gốc của chúng có gì đặc biệt nhỉ? Hãy cùng tìm hiểu trong bài này nhé!",
                'noi_dung'         => "Đầu tiên, chúng ta cần nói về Vibranium trước. Đây vốn là dạng quặng kim loại hiếm có xuất xứ từ ngoài vũ trụ. Nhưng trải qua khoảng thời gian dài, chúng đã bị khai thác quá nhiều tới mức gần như cạn kiệt, rất khó tìm, cho đến nay chỉ còn vài mỏ được tìm thấy trên Torfa - hành tinh thuộc phạm vi hệ thống của Đế chế Spartax. Do đó, ở hiện tại thì trữ lượng Vibranium ở Trái Đất mới là lớn nhất vũ trụ. Theo lịch sử Wakanda, Vibranium được cho là tới Trái Đất thông qua một thiên thạch rơi xuống nơi đây từ 1 triệu năm về trước.
                                        Khi đó, khối thiên thạch kích cỡ khủng này đã rơi ở vùng đất mà ngày nay được biết dưới cái tên Wakanda, phát ra phóng xạ gây biến đổi hệ sinh vật xung quanh nó và hình thành nên Tâm Hình Thảo. Loại cây này cực độc với đa số người, nhưng có thể hấp thụ và kết nối được với thần Bast nếu họ xứng đáng. Các bộ lạc ở Wakanda đã để ý đến Vibranium kể từ thời điểm đó, nhưng phải đến thời vua Olumo Bashenga thì nó mới được nghiên cứu một cách nghiêm túc. Với việc phát triển dạng kim loại này, Wakanda đã phát triển vượt bậc từ rất \
                                        sớm và từng trở thành đế chế hùng mạnh bậc nhất Trái Đất. Mãi sau này, các quốc gia khác mới bắt đầu khám phá ra rồi tìm cách thu gom, khai thác chúng để chế tạo vũ khí.",
                'hinh_anh'         => "https://static1.dienanh.net/upload/202302/a083aa4e-fbfc-4e96-b42a-dcafa5f56a12.jpg, https://static1.dienanh.net/upload/202302/8a835af9-0715-45d4-a6a4-50b8e42890c3.jpg",
                'is_open'          => 1,
            ],
            [
                'tieu_de'          => "Oscar 2023: Những Chuyện Hậu Trường Đầy Bất Ngờ",
                'mo_ta_ngan'       => "Năm nay, đâu là đề cử Oscar được biết đến rộng rãi nhất tại xứ sở sương mù? Hẳn bạn nghĩ là Top Gun: Maverick hoặc Avatar: The Way Of Water – phá đảo phòng vé toàn cầu",
                'noi_dung'         => "1. All Quiet On The Western Front đã thắng Oscar rồi! Gần cả thế kỉ trước, năm 1930, chuyển thể từ tiểu thuyết của Erich Maria Remargue từng thắng Oscar. Phiên bản gần nhất do Netflix sản xuất được cả khán giả lẫn giới phê bình tán dương nồng nhiệt.  Mới có hai phim nhận đề cử khi chuyển thể chung tác phẩm là Mutiny On The Bounty (1935 & 1962) và West Side Story (1961 & 2021).
                                       2. Có lẽ nhân vật Oscar nổi tiếng nhất Anh quốc lại là một con chuột chũi! Năm nay, đâu là đề cử Oscar được biết đến rộng rãi nhất tại xứ sở sương mù? Hẳn bạn nghĩ là Top Gun: Maverick hoặc Avatar: The Way Of Water – phá đảo phòng vé toàn cầu. Chưa chắc đâu nha. Đối đầu cùng hai thương hiệu này là một trong những phim hoạt hình ngắn xuất sắc nhất mọi thời đại. The Boy, The Mole, The Fox And The Horse có tận 8,7 triệu khán giả. Tác phẩm chuyển thể từ quyển sách bán chạy của Charlie Mackesy
                                       3. Thời lượng trung bình các tác phẩm được đề cử Phim xuất sắc nhất là 144 phút. Ngắn nhất là Women Talking (104 phút), dài nhất là Avatar: The Way Of Water (192 phút).
                                       4. Lần hiếm hoi đồng đạo diễn vào danh sách đề cử Daniel Kwan và Daniel Scheinert cùng chỉ đạo phim hay Everything Everywhere All At Once và được Viện Hàn Lâm lựa chọn. Đây là lần thứ 5 một đôi đồng đạo diễn nhận vinh dự này. Các trường hợp trước đây là Robert Wise và Jerome Robbins (West Side Story), Warren Beatty và Buck Henry (Heaven Can Wait), Joel và Ethan Coen / anh em nhà Coen (No Country for Old Men và True Grit).
                                       5. Judd Hirsch phá kỉ lục khoảng cách giữa các lần đề cử. Ngôi sao The Fabelmans được đề cử Nam phụ xuất sắc nhất vào 01.2023. Cách 41 năm và 341 ngày từ lần đầu ông nhận đề cử trong Ordinary People (1980). Đây cũng là năm chứng kiến sự trở lại sau thời gian rất rất dài. Đó là Todd Field với Tár (16 năm), Avatar: The Way Of Water (13 năm) và Top Gun: Maverick (36 năm)",
                'hinh_anh'         => "https://www.galaxycine.vn/media/2023/3/10/2_1678432207002.jpg",
                'is_open'          => 1,
            ],

            [
                'tieu_de'          => "7 biến thể Kang được trông đợi sẽ xuất hiện trong series Loki Mùa 2",
                'mo_ta_ngan'       => "Một điều mà mình thấy không thể chối cãi đó chính là Giai đoạn 5 của MCU đang gây dựng những bước tiến lớn tiếp theo để đưa người xem tới trận chiến vĩ đại của Phase này - Avengers: The Kang Dynasty, điều này đồng nghĩa với việc nhiều biến thể khác của Kang chắc chắn sẽ xuất hiện và nằm rải rác ở các dự án sắp tới của hãng.",
                'noi_dung'         => "Trong dự án gần nhất của Phase 5, Loki Mùa 2, mình đang rất mong chờ được nhìn thấy thêm một hoặc hai biến thể của Kang nữa để thoả lòng mong đợi và chứng kiến sức mạnh thật sự của “họ nhà Kang”, khi mà hai biến thể trước đã bị xử đẹp khá nhẹ nhàng và chóng vánh. Giờ thì, hãy cũng mình điểm qua 7 biến thể nội trội của Kang và dự đoán xem (bên cạnh biến thể đã được MCU xác nhận)
                                        biến thể nào có thể sẽ xuất hiện trong mùa tiếp theo của Loki nhé. Hiện tại, Victor Timely là biến thể duy nhất của Kang the Conqueror đã được xác nhận sẽ xuất hiện trong Loki mùa 2,
                                        nhờ vào cảnh post-credit của Ant-Man and the Wasp: Quantumania. Trong Marvel Comics,
                                        Kang lấy danh tính là Victor Timely sau khi hắn thành lập thị trấn nhỏ có tên là Timely, trú tại bang Wisconsin ở Trái đất vào năm 1901, sau đó hắn ta cũng “vào vai” con trai và cháu trai của chính mình. Lúc này Kang sử dụng Timely làm một nơi bí mật cho căn cứ Chronopolis, làm chủ một đế chế công nghiệp hiện đại, phát triển một nền công nghệ tối tân, để làm nền tảng tiến tới chinh phạt thế giới hiện đại vào 20 năm sau.",
                'hinh_anh'         => "https://static1.dienanh.net/upload/202303/da9ac297-9035-4a12-a897-3fa635e4d3e1.jpg, https://static1.dienanh.net/upload/202303/66b9a14f-4bec-4bb9-9ba6-edafcc77c375.jpg, https://static1.dienanh.net/upload/202303/331fed2b-0378-46f1-8a77-c8a264ee8185.jpg",
                'is_open'          => 1,
            ],

            [
                'tieu_de'          => "Cướp Biển Vùng Caribbean và loạt phim bị dính “lời nguyền con số 4”",
                'mo_ta_ngan'       => "Loạt phim bị dính “lời nguyền con số 4”, tuy bao nhiêu phần thành công rực rỡ phía trước, cứ hễ ra phần thứ 4 là auto thảm bại.",
                'noi_dung'         => "1/ Men In Black: Sau 3 phần đại thắng, cứ ngỡ 2012 sẽ là hồi kết hoành tráng cho tựa phim Men in Black. Thế nhưng nhà sản xuất đã tự hủy bằng cách cho ra đời thêm phần phim phụ mờ nhạt, thiếu điểm nhấn mang tên Men in Black: International, khiến bao nhiêu cảm tình của khán giả dành cho thương hiệu trước giờ, đổ sông đổ bể. 2/ Pirates of the Caribbean: Hình ảnh của Johnny Depp trong Pirates of the Caribbean nhanh chóng trở thành biểu tượng văn hóa khi 3 phần phim kết thúc. Thế nhưng phần phim bổ sung vào năm 2011 lại trở nên thừa
                                         thãi và chìm nghỉm so với thành tựu trước đó mà hãng phim xây dựng được. 3/ Shrek : Bộ phim xuất sắc vực dậy cả thị trường hoạt hình trẻ em đang bị bão hòa với 3 phần phim ý nghĩa. Nhưng phần thứ tư với tên gọi Shrek Forever After lại kém thu hút, gây ảnh hưởng đến danh tiếng của cả một hệ thống phim. 4/ Alien: Resurrection, phần phim thứ 4 của thương hiệu Alien cũng là trường hợp xui rủi, đánh mất những ấn tượng tốt mà khán giả đã ưu ái cho bộ ba trước đó. 5/ Terminator: Tương tự như Alien, phần phim thứ tư của Terminator với tên gọi Terminator Salvation cũng lạc quẻ, thảm hại và tầm thường hơn hẳn 3 bộ phim trước.",
                'hinh_anh'         => "https://static1.dienanh.net/upload/202301/2c585b17-03cf-4454-975e-2140e976005a.jpg, https://static1.dienanh.net/upload/202301/83e46a35-3982-447f-b4e4-a63dacc6c293.jpg, https://static1.dienanh.net/upload/202301/22f62a73-1006-4fa8-8ea1-daa3854011ba.jpg",
                'is_open'          => 1,
            ],
        ]);
        // php artisan db:seed --class="BaiVietSeeder"
    }
}
