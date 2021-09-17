<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
            [
                'title' => 'Top 7 Software Testing Forums that You Don’t Want to Miss Out',
                'content' => '#1: uTest Forum, #2: TESTHuddle Forum, #3: QualityTesting Forum, #4: Ministry of Testing Club, #5: LinkedIn Group, #6: SQA StackExchange, #7: Quora.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'CHUYỆN HỌC TIẾNG ANH – PHẦN 3: TÔI ĐÃ ĐẠT IELTS 7.5 NHƯ THẾ NÀO',
                'content' => 'Sơ lược về IELTS IELTS là một chứng chỉ tiếng Anh. Nếu muốn du học, bạn cần chứng chỉ IELTS trên 6.5 (Một số trường nhận có IELTS và TOEFL, mình không thi TOEFL nên không rõ).',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Giá trị của một Full-stack developer',
                'content' => 'Hầu hết các developer dành phần lớn thời gian của sự nghiệp cho việc chuyên môn hoá bản thân về một mảng nào đó ví dụ như Front-end, Back-end hay Devops,…',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Tổng hợp những tính năng ES6 nổi bật',
                'content' => 'Việc hầu hết những tính năng hay ho hấp dẫn của ES6 đều đã được các trình duyệt hỗ trợ quả là tin vui cho giới lập trình web.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Tất tần tật về ngôn ngữ lập trình PHP',
                'content' => 'PHP là viết tắt của từ Hypertext Preprocessor. Ngôn ngữ này được phát triển từ năm 1994 và cho đến nay đã được nhiều người sử dụng để phát triển các ứng dụng phần mềm thông qua lập trình web.',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Tại sao nên học lập trình PHP?',
                'content' => 'Một trong web có thể được viết ra bằng nhiều các ngôn ngữ lập trình khác nhau. Tuy nhiên, lời khuyên của chúng tôi là bạn nên sử dụng ngôn ngữ lập trình PHP để thiết kế web.',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Tính năng chính của PHP',
                'content' => 'Mã nguồn mở, Nền tảng độc lập, Sử dụng quy trình và hướng đến đối tượng, Dễ học, Phát triển ứng dụng và mục đích sử dụng, Tương thích với máy chủ, Tích hợp cơ sở dữ liệu dễ dàng.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => '65 nghìn developer nghĩ gì qua khảo sát của StackOverflow năm 2020?',
                'content' => 'Vào tuần cuối tháng 5 2020, StackOverFlow (SOF) đã công bố kết quả khảo sát các lập trình viên năm 2020. Đây là lần thứ 10 SOF thực hiện việc này và năm nay có sự tham gia của hơn 65,000 lập trình viên.',
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('posts')->insert($posts);
    }
}
