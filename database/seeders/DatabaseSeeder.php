<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $password = '2222222';
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        DB::table('users')->insert([
            'username' => 'xuannchienn',
            'email' => 'xuannchienn@gmail.com',
            'password' => $hashedPassword,
            'phanquyen' => 'admin'
        ]);
        DB::table('loaisanpham')->insert([
            'tenLoaiSanPham' => 'Iphone',
        ]);
        DB::table('loaisanpham')->insert([
            'tenLoaiSanPham' => 'SamSung',
        ]);
        DB::table('loaisanpham')->insert([
            'tenLoaiSanPham' => 'HTC',
        ]);
        DB::table('loaisanpham')->insert([
            'tenLoaiSanPham' => 'Xiaomi',
        ]);
        DB::table('loaisanpham')->insert([
            'tenLoaiSanPham' => 'Oppo',
        ]);
        DB::table('loaisanpham')->insert([
            'tenLoaiSanPham' => 'vivo',
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'Apple iPhone 14 Pro Max 128GB LL',
            'moTa' => 'Thông số kỹ thuật
            Màn hình	: OLED, 6.7", Super Retina XDR
            Hệ điều hành	: iOS 16
            Camera sau	: Chính 48 MP & Phụ 12 MP, 12 MP
            Camera trước	: 12 MP
            CPU	: Apple A16 Bionic 6 nhân
            Bộ nhớ trong	: 128 GB
            Nhìn chung, iPhone 14 Pro Max sẽ không mang đến nhiều khác biệt về mặt thiết kế khi đặt cạnh biến thể iPhone 13 Pro Max tiền nhiệm. Tuy nhiên, hệ thống cảm biến lớn hơn đã làm cho kích thước tổng thể của sản phẩm dày hơn đôi chút với chiều dài, rộng và dày lần lượt là 6,33 x 3,05 x 0,31 inch.
            Không chỉ dừng lại ở màn hình đục lỗ dạng viên thuốc với chế độ Dynamic Island, Apple còn mang đến cho sản phẩm của hãng khả năng hiển thị hàng đầu với tấm nền Retina XDR OLED hỗ trợ True Tone, Haptic Touch cùng độ sáng tối đa lên đến 2000 nits.
            Hơn thế nữa, tính năng Always On Display cũng được "nhà táo" lần đầu giới thiệu đến với người dùng, cho phép hiển thị các tiện ích và thông báo ở trạng thái năng lượng thấp nhờ công nghệ LTPO có thể tối ưu tần số quét xuống 1Hz.',
            'soLuong' => '30',
            'gia' => '23000000',
            'hinhanh' => 'apple-iphone-14-pro-128gb-ll-01663724512.jpg',
            'luotXem' => '1',
            'luotThich' => '1',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'iPhone 13 128GB | Chính hãng VN/A',
            'moTa' => 'TĐánh giá iPhone 13 - Flagship được mong chờ năm 2021
            Cuối năm 2020, bộ 4 iPhone 12 đã được ra mắt với nhiều cái tiến. Sau đó, mọi sự quan tâm lại đổ dồn vào sản phẩm tiếp theo – iPhone 13. Vậy iP 13 sẽ có những gì nổi bật, hãy tìm hiểu ngay sau đây nhé!
            
            Thiết kế với nhiều đột phá
            Về kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).
            
            Thì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.
            Phần tai thỏ trên iPhone 13 cũng có thay đổi so với thế hệ trước, cụ thể tai thỏ này được làm nhỏ hơn so với 20%, trong khi đó độ dày của máy vẫn được giữ nguyên. Điểm khác biệt nhất về thiết kế trên thế hệ iPhone 2021 này đó là camera chéo.

            Màu sắc trên mẫu iPhone mới này cũng đa dạng hơn, trong đó nổi bật là iPhone 13 màu hồng. Các màu sắc còn lại đề đã từng được xuất hiện trên các phiên bản trước đó như trắng, đen, đỏ, xanh blue.',
            'soLuong' => '12',
            'gia' => '16890000',
            'hinhanh' => '1634217399887-ip13-ro2-min.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'Samsung Galaxy S22 Plus (8GB - 256GB)',
            'moTa' => 'TĐánh giá iPhone 13 - Flagship được mong chờ năm 2021
            Cuối năm 2020, bộ 4 iPhone 12 đã được ra mắt với nhiều cái tiến. Sau đó, mọi sự quan tâm lại đổ dồn vào sản phẩm tiếp theo – iPhone 13. Vậy iP 13 sẽ có những gì nổi bật, hãy tìm hiểu ngay sau đây nhé!
            
            Thiết kế với nhiều đột phá
            Về kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).
            
            Thì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.
            Phần tai thỏ trên iPhone 13 cũng có thay đổi so với thế hệ trước, cụ thể tai thỏ này được làm nhỏ hơn so với 20%, trong khi đó độ dày của máy vẫn được giữ nguyên. Điểm khác biệt nhất về thiết kế trên thế hệ iPhone 2021 này đó là camera chéo.

            Màu sắc trên mẫu iPhone mới này cũng đa dạng hơn, trong đó nổi bật là iPhone 13 màu hồng. Các màu sắc còn lại đề đã từng được xuất hiện trên các phiên bản trước đó như trắng, đen, đỏ, xanh blue.',
            'soLuong' => '12',
            'gia' => '18090000',
            'hinhanh' => '639009.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '2',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'iPhone 14 128GB | Chính hãng VN/A',
            'moTa' => 'Theo đúng như dự kiến, đêm 8/9/2022 Apple đã chính thức giới thiệu sesier iPhone mới đến với người tiêu dùng. Mẫu điện thoại iPhone 14 mới ra mắt vẫn giữ được mức giá so với iPhone 13 trước đó nhưng vẫn có nhiều nâng cấp khác biệt. Điện thoại sở hữu màn hình Retina XDR OLED kích thước 6.1 inch cùng độ sáng vượt trội lên đến 1200 nits. Máy cũng sẽ được trang bị camera kép 12 MP phía sau cùng cảm biến điểm ảnh lớn, đạt 1.9 micron giúp cải thiện khả năng chụp thiếu sáng. Mẫu iPhone 14 mới cũng mang trong mình con chip Apple A15 Bionic phiên bản 5 nhân mang lại hiệu suất vượt trội.
            iPhone 14 màu vàng (Yellow) mới
            iPhone 14 vàng là phiên bản màu sắc mới được Apple cập nhật vào tháng 3/2023. Điện thoại iPhone 14 vàng chanh này được hoàn thiệt mặt sau bằng kinh và cạnh viền nhôm màu vàng rực rõ. Các chi tiết khác sẽ giống những mẫu iPhone 14 phiên bản màu khác. Cụ thể, iPhone 14 vàng được trang bị màn hình OLED 6.1 inch siêu sắc nét. Hiệu năng vượt trội tới từ chipset đầu bảng - A15 Bionic. Hệ thống camera với nhiều cải tiến mới cùng dung lượng pin 3279mAh giúp nâng cao trải nghiệm của người dùng.',
            'soLuong' => '10',
            'gia' => '20000000',
            'hinhanh' => 'a2-9005-1678197385.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'Apple iPhone 14 Pro Max 128GB LL',
            'moTa' => 'Thông số kỹ thuật
            Màn hình	: OLED, 6.7", Super Retina XDR
            Hệ điều hành	: iOS 16
            Camera sau	: Chính 48 MP & Phụ 12 MP, 12 MP
            Camera trước	: 12 MP
            CPU	: Apple A16 Bionic 6 nhân
            Bộ nhớ trong	: 128 GB
            Nhìn chung, iPhone 14 Pro Max sẽ không mang đến nhiều khác biệt về mặt thiết kế khi đặt cạnh biến thể iPhone 13 Pro Max tiền nhiệm. Tuy nhiên, hệ thống cảm biến lớn hơn đã làm cho kích thước tổng thể của sản phẩm dày hơn đôi chút với chiều dài, rộng và dày lần lượt là 6,33 x 3,05 x 0,31 inch.
            Không chỉ dừng lại ở màn hình đục lỗ dạng viên thuốc với chế độ Dynamic Island, Apple còn mang đến cho sản phẩm của hãng khả năng hiển thị hàng đầu với tấm nền Retina XDR OLED hỗ trợ True Tone, Haptic Touch cùng độ sáng tối đa lên đến 2000 nits.
            Hơn thế nữa, tính năng Always On Display cũng được "nhà táo" lần đầu giới thiệu đến với người dùng, cho phép hiển thị các tiện ích và thông báo ở trạng thái năng lượng thấp nhờ công nghệ LTPO có thể tối ưu tần số quét xuống 1Hz.',
            'soLuong' => '30',
            'gia' => '23000000',
            'hinhanh' => 'apple-iphone-14-pro-128gb-ll-01663724512.jpg',
            'luotXem' => '1',
            'luotThich' => '1',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'iPhone 13 128GB | Chính hãng VN/A',
            'moTa' => 'TĐánh giá iPhone 13 - Flagship được mong chờ năm 2021
            Cuối năm 2020, bộ 4 iPhone 12 đã được ra mắt với nhiều cái tiến. Sau đó, mọi sự quan tâm lại đổ dồn vào sản phẩm tiếp theo – iPhone 13. Vậy iP 13 sẽ có những gì nổi bật, hãy tìm hiểu ngay sau đây nhé!
            
            Thiết kế với nhiều đột phá
            Về kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).
            
            Thì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.
            Phần tai thỏ trên iPhone 13 cũng có thay đổi so với thế hệ trước, cụ thể tai thỏ này được làm nhỏ hơn so với 20%, trong khi đó độ dày của máy vẫn được giữ nguyên. Điểm khác biệt nhất về thiết kế trên thế hệ iPhone 2021 này đó là camera chéo.

            Màu sắc trên mẫu iPhone mới này cũng đa dạng hơn, trong đó nổi bật là iPhone 13 màu hồng. Các màu sắc còn lại đề đã từng được xuất hiện trên các phiên bản trước đó như trắng, đen, đỏ, xanh blue.',
            'soLuong' => '12',
            'gia' => '16890000',
            'hinhanh' => '1634217399887-ip13-ro2-min.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'Samsung Galaxy S22 Plus (8GB - 256GB)',
            'moTa' => 'TĐánh giá iPhone 13 - Flagship được mong chờ năm 2021
            Cuối năm 2020, bộ 4 iPhone 12 đã được ra mắt với nhiều cái tiến. Sau đó, mọi sự quan tâm lại đổ dồn vào sản phẩm tiếp theo – iPhone 13. Vậy iP 13 sẽ có những gì nổi bật, hãy tìm hiểu ngay sau đây nhé!
            
            Thiết kế với nhiều đột phá
            Về kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).
            
            Thì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.
            Phần tai thỏ trên iPhone 13 cũng có thay đổi so với thế hệ trước, cụ thể tai thỏ này được làm nhỏ hơn so với 20%, trong khi đó độ dày của máy vẫn được giữ nguyên. Điểm khác biệt nhất về thiết kế trên thế hệ iPhone 2021 này đó là camera chéo.

            Màu sắc trên mẫu iPhone mới này cũng đa dạng hơn, trong đó nổi bật là iPhone 13 màu hồng. Các màu sắc còn lại đề đã từng được xuất hiện trên các phiên bản trước đó như trắng, đen, đỏ, xanh blue.',
            'soLuong' => '12',
            'gia' => '18090000',
            'hinhanh' => '639009.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '2',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'iPhone 14 128GB | Chính hãng VN/A',
            'moTa' => 'Theo đúng như dự kiến, đêm 8/9/2022 Apple đã chính thức giới thiệu sesier iPhone mới đến với người tiêu dùng. Mẫu điện thoại iPhone 14 mới ra mắt vẫn giữ được mức giá so với iPhone 13 trước đó nhưng vẫn có nhiều nâng cấp khác biệt. Điện thoại sở hữu màn hình Retina XDR OLED kích thước 6.1 inch cùng độ sáng vượt trội lên đến 1200 nits. Máy cũng sẽ được trang bị camera kép 12 MP phía sau cùng cảm biến điểm ảnh lớn, đạt 1.9 micron giúp cải thiện khả năng chụp thiếu sáng. Mẫu iPhone 14 mới cũng mang trong mình con chip Apple A15 Bionic phiên bản 5 nhân mang lại hiệu suất vượt trội.
            iPhone 14 màu vàng (Yellow) mới
            iPhone 14 vàng là phiên bản màu sắc mới được Apple cập nhật vào tháng 3/2023. Điện thoại iPhone 14 vàng chanh này được hoàn thiệt mặt sau bằng kinh và cạnh viền nhôm màu vàng rực rõ. Các chi tiết khác sẽ giống những mẫu iPhone 14 phiên bản màu khác. Cụ thể, iPhone 14 vàng được trang bị màn hình OLED 6.1 inch siêu sắc nét. Hiệu năng vượt trội tới từ chipset đầu bảng - A15 Bionic. Hệ thống camera với nhiều cải tiến mới cùng dung lượng pin 3279mAh giúp nâng cao trải nghiệm của người dùng.',
            'soLuong' => '10',
            'gia' => '20000000',
            'hinhanh' => 'a2-9005-1678197385.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'Apple iPhone 14 Pro Max 128GB LL',
            'moTa' => 'Thông số kỹ thuật
            Màn hình	: OLED, 6.7", Super Retina XDR
            Hệ điều hành	: iOS 16
            Camera sau	: Chính 48 MP & Phụ 12 MP, 12 MP
            Camera trước	: 12 MP
            CPU	: Apple A16 Bionic 6 nhân
            Bộ nhớ trong	: 128 GB
            Nhìn chung, iPhone 14 Pro Max sẽ không mang đến nhiều khác biệt về mặt thiết kế khi đặt cạnh biến thể iPhone 13 Pro Max tiền nhiệm. Tuy nhiên, hệ thống cảm biến lớn hơn đã làm cho kích thước tổng thể của sản phẩm dày hơn đôi chút với chiều dài, rộng và dày lần lượt là 6,33 x 3,05 x 0,31 inch.
            Không chỉ dừng lại ở màn hình đục lỗ dạng viên thuốc với chế độ Dynamic Island, Apple còn mang đến cho sản phẩm của hãng khả năng hiển thị hàng đầu với tấm nền Retina XDR OLED hỗ trợ True Tone, Haptic Touch cùng độ sáng tối đa lên đến 2000 nits.
            Hơn thế nữa, tính năng Always On Display cũng được "nhà táo" lần đầu giới thiệu đến với người dùng, cho phép hiển thị các tiện ích và thông báo ở trạng thái năng lượng thấp nhờ công nghệ LTPO có thể tối ưu tần số quét xuống 1Hz.',
            'soLuong' => '30',
            'gia' => '23000000',
            'hinhanh' => 'apple-iphone-14-pro-128gb-ll-01663724512.jpg',
            'luotXem' => '1',
            'luotThich' => '1',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'iPhone 13 128GB | Chính hãng VN/A',
            'moTa' => 'TĐánh giá iPhone 13 - Flagship được mong chờ năm 2021
            Cuối năm 2020, bộ 4 iPhone 12 đã được ra mắt với nhiều cái tiến. Sau đó, mọi sự quan tâm lại đổ dồn vào sản phẩm tiếp theo – iPhone 13. Vậy iP 13 sẽ có những gì nổi bật, hãy tìm hiểu ngay sau đây nhé!
            
            Thiết kế với nhiều đột phá
            Về kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).
            
            Thì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.
            Phần tai thỏ trên iPhone 13 cũng có thay đổi so với thế hệ trước, cụ thể tai thỏ này được làm nhỏ hơn so với 20%, trong khi đó độ dày của máy vẫn được giữ nguyên. Điểm khác biệt nhất về thiết kế trên thế hệ iPhone 2021 này đó là camera chéo.

            Màu sắc trên mẫu iPhone mới này cũng đa dạng hơn, trong đó nổi bật là iPhone 13 màu hồng. Các màu sắc còn lại đề đã từng được xuất hiện trên các phiên bản trước đó như trắng, đen, đỏ, xanh blue.',
            'soLuong' => '12',
            'gia' => '16890000',
            'hinhanh' => '1634217399887-ip13-ro2-min.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'Samsung Galaxy S22 Plus (8GB - 256GB)',
            'moTa' => 'TĐánh giá iPhone 13 - Flagship được mong chờ năm 2021
            Cuối năm 2020, bộ 4 iPhone 12 đã được ra mắt với nhiều cái tiến. Sau đó, mọi sự quan tâm lại đổ dồn vào sản phẩm tiếp theo – iPhone 13. Vậy iP 13 sẽ có những gì nổi bật, hãy tìm hiểu ngay sau đây nhé!
            
            Thiết kế với nhiều đột phá
            Về kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).
            
            Thì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.
            Phần tai thỏ trên iPhone 13 cũng có thay đổi so với thế hệ trước, cụ thể tai thỏ này được làm nhỏ hơn so với 20%, trong khi đó độ dày của máy vẫn được giữ nguyên. Điểm khác biệt nhất về thiết kế trên thế hệ iPhone 2021 này đó là camera chéo.

            Màu sắc trên mẫu iPhone mới này cũng đa dạng hơn, trong đó nổi bật là iPhone 13 màu hồng. Các màu sắc còn lại đề đã từng được xuất hiện trên các phiên bản trước đó như trắng, đen, đỏ, xanh blue.',
            'soLuong' => '12',
            'gia' => '18090000',
            'hinhanh' => '639009.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '2',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'iPhone 14 128GB | Chính hãng VN/A',
            'moTa' => 'Theo đúng như dự kiến, đêm 8/9/2022 Apple đã chính thức giới thiệu sesier iPhone mới đến với người tiêu dùng. Mẫu điện thoại iPhone 14 mới ra mắt vẫn giữ được mức giá so với iPhone 13 trước đó nhưng vẫn có nhiều nâng cấp khác biệt. Điện thoại sở hữu màn hình Retina XDR OLED kích thước 6.1 inch cùng độ sáng vượt trội lên đến 1200 nits. Máy cũng sẽ được trang bị camera kép 12 MP phía sau cùng cảm biến điểm ảnh lớn, đạt 1.9 micron giúp cải thiện khả năng chụp thiếu sáng. Mẫu iPhone 14 mới cũng mang trong mình con chip Apple A15 Bionic phiên bản 5 nhân mang lại hiệu suất vượt trội.
            iPhone 14 màu vàng (Yellow) mới
            iPhone 14 vàng là phiên bản màu sắc mới được Apple cập nhật vào tháng 3/2023. Điện thoại iPhone 14 vàng chanh này được hoàn thiệt mặt sau bằng kinh và cạnh viền nhôm màu vàng rực rõ. Các chi tiết khác sẽ giống những mẫu iPhone 14 phiên bản màu khác. Cụ thể, iPhone 14 vàng được trang bị màn hình OLED 6.1 inch siêu sắc nét. Hiệu năng vượt trội tới từ chipset đầu bảng - A15 Bionic. Hệ thống camera với nhiều cải tiến mới cùng dung lượng pin 3279mAh giúp nâng cao trải nghiệm của người dùng.',
            'soLuong' => '10',
            'gia' => '20000000',
            'hinhanh' => 'a2-9005-1678197385.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'Apple iPhone 14 Pro Max 128GB LL',
            'moTa' => 'Thông số kỹ thuật
            Màn hình	: OLED, 6.7", Super Retina XDR
            Hệ điều hành	: iOS 16
            Camera sau	: Chính 48 MP & Phụ 12 MP, 12 MP
            Camera trước	: 12 MP
            CPU	: Apple A16 Bionic 6 nhân
            Bộ nhớ trong	: 128 GB
            Nhìn chung, iPhone 14 Pro Max sẽ không mang đến nhiều khác biệt về mặt thiết kế khi đặt cạnh biến thể iPhone 13 Pro Max tiền nhiệm. Tuy nhiên, hệ thống cảm biến lớn hơn đã làm cho kích thước tổng thể của sản phẩm dày hơn đôi chút với chiều dài, rộng và dày lần lượt là 6,33 x 3,05 x 0,31 inch.
            Không chỉ dừng lại ở màn hình đục lỗ dạng viên thuốc với chế độ Dynamic Island, Apple còn mang đến cho sản phẩm của hãng khả năng hiển thị hàng đầu với tấm nền Retina XDR OLED hỗ trợ True Tone, Haptic Touch cùng độ sáng tối đa lên đến 2000 nits.
            Hơn thế nữa, tính năng Always On Display cũng được "nhà táo" lần đầu giới thiệu đến với người dùng, cho phép hiển thị các tiện ích và thông báo ở trạng thái năng lượng thấp nhờ công nghệ LTPO có thể tối ưu tần số quét xuống 1Hz.',
            'soLuong' => '30',
            'gia' => '23000000',
            'hinhanh' => 'apple-iphone-14-pro-128gb-ll-01663724512.jpg',
            'luotXem' => '1',
            'luotThich' => '1',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'iPhone 13 128GB | Chính hãng VN/A',
            'moTa' => 'TĐánh giá iPhone 13 - Flagship được mong chờ năm 2021
            Cuối năm 2020, bộ 4 iPhone 12 đã được ra mắt với nhiều cái tiến. Sau đó, mọi sự quan tâm lại đổ dồn vào sản phẩm tiếp theo – iPhone 13. Vậy iP 13 sẽ có những gì nổi bật, hãy tìm hiểu ngay sau đây nhé!
            
            Thiết kế với nhiều đột phá
            Về kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).
            
            Thì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.
            Phần tai thỏ trên iPhone 13 cũng có thay đổi so với thế hệ trước, cụ thể tai thỏ này được làm nhỏ hơn so với 20%, trong khi đó độ dày của máy vẫn được giữ nguyên. Điểm khác biệt nhất về thiết kế trên thế hệ iPhone 2021 này đó là camera chéo.

            Màu sắc trên mẫu iPhone mới này cũng đa dạng hơn, trong đó nổi bật là iPhone 13 màu hồng. Các màu sắc còn lại đề đã từng được xuất hiện trên các phiên bản trước đó như trắng, đen, đỏ, xanh blue.',
            'soLuong' => '12',
            'gia' => '16890000',
            'hinhanh' => '1634217399887-ip13-ro2-min.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'Samsung Galaxy S22 Plus (8GB - 256GB)',
            'moTa' => 'TĐánh giá iPhone 13 - Flagship được mong chờ năm 2021
            Cuối năm 2020, bộ 4 iPhone 12 đã được ra mắt với nhiều cái tiến. Sau đó, mọi sự quan tâm lại đổ dồn vào sản phẩm tiếp theo – iPhone 13. Vậy iP 13 sẽ có những gì nổi bật, hãy tìm hiểu ngay sau đây nhé!
            
            Thiết kế với nhiều đột phá
            Về kích thước, iPhone 13 sẽ có 4 phiên bản khác nhau và kích thước không đổi so với series iPhone 12 hiện tại. Nếu iPhone 12 có sự thay đổi trong thiết kế từ góc cạnh bo tròn (Thiết kế được duy trì từ thời iPhone 6 đến iPhone 11 Pro Max) sang thiết kế vuông vắn (đã từng có mặt trên iPhone 4 đến iPhone 5S, SE).
            
            Thì trên điện thoại iPhone 13 vẫn được duy trì một thiết kế tương tự. Máy vẫn có phiên bản khung viền thép, một số phiên bản khung nhôm cùng mặt lưng kính. Tương tự năm ngoái, Apple cũng sẽ cho ra mắt 4 phiên bản là iPhone 13, 13 mini, 13 Pro và 13 Pro Max.
            Phần tai thỏ trên iPhone 13 cũng có thay đổi so với thế hệ trước, cụ thể tai thỏ này được làm nhỏ hơn so với 20%, trong khi đó độ dày của máy vẫn được giữ nguyên. Điểm khác biệt nhất về thiết kế trên thế hệ iPhone 2021 này đó là camera chéo.

            Màu sắc trên mẫu iPhone mới này cũng đa dạng hơn, trong đó nổi bật là iPhone 13 màu hồng. Các màu sắc còn lại đề đã từng được xuất hiện trên các phiên bản trước đó như trắng, đen, đỏ, xanh blue.',
            'soLuong' => '12',
            'gia' => '18090000',
            'hinhanh' => '639009.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '2',
            'id_khuyenMai' => null,
        ]);
        DB::table('sanpham')->insert([
            'tenSp' => 'iPhone 14 128GB | Chính hãng VN/A',
            'moTa' => 'Theo đúng như dự kiến, đêm 8/9/2022 Apple đã chính thức giới thiệu sesier iPhone mới đến với người tiêu dùng. Mẫu điện thoại iPhone 14 mới ra mắt vẫn giữ được mức giá so với iPhone 13 trước đó nhưng vẫn có nhiều nâng cấp khác biệt. Điện thoại sở hữu màn hình Retina XDR OLED kích thước 6.1 inch cùng độ sáng vượt trội lên đến 1200 nits. Máy cũng sẽ được trang bị camera kép 12 MP phía sau cùng cảm biến điểm ảnh lớn, đạt 1.9 micron giúp cải thiện khả năng chụp thiếu sáng. Mẫu iPhone 14 mới cũng mang trong mình con chip Apple A15 Bionic phiên bản 5 nhân mang lại hiệu suất vượt trội.
            iPhone 14 màu vàng (Yellow) mới
            iPhone 14 vàng là phiên bản màu sắc mới được Apple cập nhật vào tháng 3/2023. Điện thoại iPhone 14 vàng chanh này được hoàn thiệt mặt sau bằng kinh và cạnh viền nhôm màu vàng rực rõ. Các chi tiết khác sẽ giống những mẫu iPhone 14 phiên bản màu khác. Cụ thể, iPhone 14 vàng được trang bị màn hình OLED 6.1 inch siêu sắc nét. Hiệu năng vượt trội tới từ chipset đầu bảng - A15 Bionic. Hệ thống camera với nhiều cải tiến mới cùng dung lượng pin 3279mAh giúp nâng cao trải nghiệm của người dùng.',
            'soLuong' => '10',
            'gia' => '20000000',
            'hinhanh' => 'a2-9005-1678197385.jpg',
            'luotXem' => '0',
            'luotThich' => '0',
            'id_loaiSP' => '1',
            'id_khuyenMai' => null,
        ]);
    }
}
