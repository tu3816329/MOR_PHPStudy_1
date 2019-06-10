<?php

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')-> insert([
        'title'=>"Tòa Cấp cao xét kháng cáo của hai cựu thứ trưởng công an",
        'image'=>"https://i-vnexpress.vnecdn.net/2019/06/10/buivanthanh51851550147163-1560-8051-2373-1560120069_500x300.jpg",
        'description'=>'Hai cựu thứ trưởng Công an Bùi Văn Thành, Trần Việt Tân cùng đề nghị cấp phúc thẩm xem xét lại tội danh, mức hình phạt.',
        'lastModified'=>'2019-06-10 00:00:00']);

        DB::table('news')-> insert([
            'title'=>"Quốc hội sẽ giám sát việc phòng, chống xâm hại trẻ em",
            'image'=>"https://i-vnexpress.vnecdn.net/2019/06/10/201711201549320779NDN7180HaBnh-6228-9794-1560133855_140x84.jpg",
            'description'=>'Trước tình trạng xâm hại trẻ em đang là vấn đề nóng của xã hội, Quốc hội sẽ lập đoàn giám sát về nội dung này.',
            'lastModified'=>'2019-06-10 00:00:00']);

        DB::table('news')-> insert([
            'title'=>"Biểu tình phản đối dẫn độ sang Trung Quốc biến thành bạo lực ở Hong Kong",
            'image'=>"https://i-vnexpress.vnecdn.net/2019/06/10/hongkong1-1560124404-4897-1560124744_140x84.jpg",
            'description'=>'Cảnh sát dùng dùi cui và hơi cay giải tán đám đông sau khi một nhóm người biểu tình mang khẩu trang cố xông vào cơ quan lập pháp.',
            'lastModified'=>'2019-06-10 00:00:00']);

        DB::table('news')-> insert([
            'title'=>"Ôtô CSGT Bình Dương tông chết người trên vỉa hè",
            'image'=>"https://i-vnexpress.vnecdn.net/2019/06/09/xeCSGT1-1560099574-5485-1560099593_140x84.jpg",
            'description'=>'Chiếc xe 7 chỗ mang biển xanh do người đàn ông mặc thường phục lái đã lao lên vỉa hè, tông chết nam thanh niên bán trái cây.',
            'lastModified'=>'2019-06-10 00:00:00']);

        DB::table('news')-> insert([
            'title'=>"Bồ Đào Nha vô địch Nations League ",
            'image'=>"https://i-thethao.vnecdn.net/2019/06/10/rona-1560122656-6435-1560122668_140x84.jpg",
            'description'=>'Ronaldo và đồng đội hạ Hà Lan 1-0 trong trận chung kết trên sân nhà tối 9/6.',
            'lastModified'=>'2019-06-10 00:00:00']);
        DB::table('news')-> insert([
            'title'=>"Nadal lần thứ 12 vô địch Roland Garros ",
            'image'=>"https://i-thethao.vnecdn.net/2019/06/09/145693087121511imagea511560097-2049-1998-1560099551_140x84.jpg",
            'description'=>'Hạt giống số hai thắng Thiem sau 4 set, với tỷ số lần lượt là 6-3, 5-7, 6-1, 6-1 ở chung kết tối 9/6.',
            'lastModified'=>'2019-06-10 00:00:00']);
        DB::table('news')-> insert([
            'title'=>"Robot cảnh sát xử phạt người vi phạm giao thông  ",
            'image'=>"https://i-vnexpress.vnecdn.net/2019/06/09/robocop-1560056504-9248-1560056970_140x84.jpg",
            'description'=>'Robot trang bị camera, loa giúp CSGT xử phạt người vi phạm ngay tại ghế lái, không cần ra khỏi xe.',
            'lastModified'=>'2019-06-10 00:00:00']);

        DB::table('news')-> insert([
            'title'=>"Bất động sản Đà Nẵng lộ dấu hiệu giảm tốc",
            'image'=>"https://i-kinhdoanh.vnecdn.net/2019/06/09/da-nang-3736-1560078355_140x84.png",
            'description'=>'Sau cơn sốt đầu năm, giá một số phân khúc bất động sản bắt đầu sụt giảm trên thị trường địa ốc thứ cấp tại Đà Nẵng.',
            'lastModified'=>'2019-06-10 00:00:00']);

        DB::table('news')-> insert([
           'title'=>"'Dark Phoenix' - hồi kết gây thất vọng của các X-Men  ",
           'image'=>"https://i-giaitri.vnecdn.net/2019/06/09/settopvnexpressreviewdarkphoen-7556-8039-1560099516_140x84.jpg",
            'description'=>'Tác phẩm do Simon Kinberg đạo diễn có kịch bản rời rạc, phát triển nhân vật không rõ ràng.',
            'lastModified'=>'2019-06-10 00:00:00']);
    }
}
