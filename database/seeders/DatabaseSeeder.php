<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;


class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   *
   * @return void
   */
  // luc truoc xamp là 3306 gio la 3309
  public function run()
  {
    DB::table('products')->insert([
      'id' => 4,
      'name' => 'OPPO Reno6 Z 5G',
      'manu_id' => 3,
      'type_id' => 1,
      'price' => 9490000,
      'image' => 'oppo-reno6-z-5g-aurora-1-600x600.jpg',
      'description' =>  '      
      Cấu hình Điện thoại OPPO Reno6 Z 5G.
       Màn hình: AMOLED,6.43 ",Full HD+ Hệ điều hành: Android 11 + Camera sau: Chính 64 MP & Phụ 8 MP, 2 MP Camera trước:32 MP Chip: MediaTek Dimensity 800U 5G RAM: 8 GB Bộ nhớ trong: 128 GB,
       SIM:2 Nano SIM, Hỗ trợ 5G,
       Pin, Sạc:4310 mAh,30 W ',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);
    DB::table('products')->insert([
      'id' => 7,
      'name' => 'Oppo Watch 46mm dây silicone',
      'manu_id' => 3,
      'type_id' => 5,
      'price' => 7990000,
      'image' => 'oppo-watch-46mm-day-silicone-thumb-1-1-600x600.jpg',
      'description' =>  '
         Cấu hình Oppo Watch 46mm dây silicone vàng đồng,
         Màn hình:AMOLED,1.91 inch,
         Thời lượng pin: Khoảng 21 ngày (chế độ tiết kiệm pin),Khoảng 36 giờ (chế độ thường).Kết nối với hệ điều hành: Android 6.0 trở lên và iOS 12 trở lên,
         Mặt: Kính cường lực,46 mm,
         Tính năng cho sức khỏe: Chế độ luyện tập. Theo dõi giấc ngủ. Tính lượng calories tiêu thụ. Tính quãng đường chạy. Đo nhịp tim. Đếm số bước chân',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);
    DB::table('products')->insert([
      'id' => 8,
      'name' => 'Oppo Watch 41mm dây silicone',
      'manu_id' => 3,
      'type_id' => 5,
      'price' => 7990000,
      'image' => 'oppo-watch-41mm-day-silicone-thumb-1-1-600x600.jpg',
      'description' =>  '
         Cấu hình Oppo Watch 41mm dây silicone đen
         Màn hình:AMOLED,1.6 inchThời lượng pin: Khoảng 14 ngày (chế độ tiết kiệm pin),Khoảng 24 giờ (chế độ thường),
         Kết nối với hệ điều hành: Android 6.0 trở lên, iOS 12 trở lên,
         Mặt: Kính cường lực,41 mm,
         Tính năng cho sức khỏe: Chế độ luyện tập. Theo dõi giấc ngủ. Tính lượng calories tiêu thụ. Tính quãng đường chạy. Đo nhịp tim. Đếm số bước chân',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);
    DB::table('products')->insert([
      'id' => 9,
      'name' => 'Xiaomi 11 Lite 5G NE',
      'manu_id' => 4,
      'type_id' => 1,
      'price' => 9490000,
      'image' => 'xiaomi-11-lite-5g-ne-pink-600x600.jpg',
      'description' =>  '
      Cấu hình Điện thoại Xiaomi 11 Lite 5G NE,
Màn hình:AMOLED; 6.55 ;Full HD+,
Hệ điều hành:Android 11,
Camera sau: Chính 64 MP & Phụ 8 MP; 5 MP,
Camera trước: 20 MP,
Chip: Snapdragon 778G 5G 8 nhân,
RAM:8 GB
Bộ nhớ trong:128 GB,
SIM:2 Nano SIM (SIM 2 chung khe thẻ nhớ); Hỗ trợ 5G,
Pin và Sạc:4250 mAh và 33 W,
Hãng: Xiaomi.',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);
    DB::table('products')->insert([
      'id' => 6,
      'name' => 'Tai nghe Bluetooth True Wireless OPPO ENCO Buds ETI81',
      'manu_id' => 3,
      'type_id' => 4,
      'price' => 790000,
      'image' => 'bluetooth-tws-oppo-enco-buds-eti81-ava-1-600x600.jpg',
      'description' =>  '
         Thông số kỹ thuật Tai nghe Bluetooth True Wireless OPPO ENCO Buds ETI81,
         Thời gian tai nghe: Dùng 6 giờ - Sạc 2.5 giờ,
         Thời gian hộp sạc: Dùng 24 giờ - Sạc 2.5 giờ,
         Cổng sạc: Type-C,
         Tương thích: Android, iOS (iPhone, iPad), Windows,
         Tiện ích: Chống nước. Điều khiển bằng: Cảm ứng chạm. Hãng: OPPO',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);
    DB::table('products')->insert([
      'id' => 5,
      'name' => 'OPPO Find X3 Pro 5G',
      'manu_id' => 3,
      'type_id' => 1,
      'price' => 26990000,
      'image' => 'oppo-find-x3-pro-black-001-1-600x600.jpg',
      'description' =>  '
         Cấu hình Điện thoại OPPO Find X3 Pro 5G,
         Màn hình: AMOLED - 6.7 & Quad HD+ (2K+),
         Hệ điều hành: Android 11. Camera sau:Chính 50 MP & Phụ 50 MP 13 MP 3 MP,
         Camera trước: 32 MP.
         Chip:Snapdragon 888. RAM:12 GB,
         Bộ nhớ trong: 256 GB,
         SIM: 2 Nano SIM & Hỗ trợ 5G,
         Pin và Sạc:4500 mAh 65 W',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);

    DB::table('products')->insert([
      'id' => 10,
      'name' => 'Xiaomi Pad 5 256GB',
      'manu_id' => 4,
      'type_id' => 3,
      'price' => 10490000,
      'image' => 'xiaomi-pad-5-grey-600x600.jpg',
      'description' =>  '
Cấu hình Máy tính bảng Xiaomi Pad 5 256GB,
Màn hình:11 và IPS LCD,
Hệ điều hành: Android 11, 
Chip: Snapdragon 860 8 nhân,
RAM:6 GB Bộ nhớ trong:256 GB,
Camera sau:13 MP Camera trước:8 MP 
Pin và Sạc:8720 mAh 33 W,
 Hãng: Xiaomi',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',




      //  
    ]);
    DB::table('products')->insert([
      'id' => 1,
      'name' => 'Điện thoại iPhone 13 Pro Max 256GB',
      'manu_id' => 1,
      'type_id' => 1,
      'price' => 36990000,
      'image' => 'iphone-13-pro-max-xanh-la-thumb-600x600.jpg',
      'description' =>  '
                     Màn hình: OLED6.7"Super Retina XDR,
                     Hệ điều hành: iOS 15,
                     Camera sau: 3 camera 12 MP,
                     Camera trước: 12 MP,
                     Chip: Apple A15 Bionic,
                     RAM: 6 GB,
                     Bộ nhớ trong: 256 GB,
                     SIM: 1 Nano SIM & 1 eSIMHỗ trợ 5G,
                     Pin & Sạc: 4352 mAh20 W ',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10'


    ]);
    DB::table('products')->insert([
      'id' => 2,
      'name' => 'Điện thoại iPhone 11 64GB',
      'manu_id' => 1,
      'type_id' => 1,
      'price' => 16290000,
      'image' => 'iphone-xi-do-600x600.jpg',
      'description' =>  '
                     Màn hình: IPS LCD6.1"Liquid Retina,
                     Hệ điều hành: iOS 15,
                     Camera sau: 3 camera 12 MP,
                     Camera trước: 12 MP,
                     Chip: Apple A15 Bionic,
                     RAM: 4 GB. Bộ nhớ trong:64 GB,
                     SIM: 1 Nano SIM & 1 eSIMHỗ trợ 4G,
                     Pin và Sạc:3110 mAh18 W,
                   ',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);

    DB::table('products')->insert([
      'id' => 3,
      'name' => 'Điện thoại Samsung Galaxy A13 6GB ',
      'manu_id' => 1,
      'type_id' => 1,
      'price' => 4990000,
      'image' => 'samsung-galaxy-a13-xanh-thumb-1-600x600.jpg',
      'description' =>  'Màn hình: PLS TFT LCD6.6"Full HD+
          Hệ điều hành: Android 12
          Camera sau: Chính 50 MP & Phụ 5 MP & 2 MP & 2 MP,
          Camera trước: 8 MP,
          Chip: Exynos 850.
          RAM: 6 GB. 
          Bộ nhớ trong: 128 GB  ,     
          SIM:2 Nano SIM và hỗ trợ 4G,
          Pin và Sạc:  5000 mAh 15 W',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);

    DB::table('protypes')->insert([
      'type_id' => 1,
      'type_name' => 'PHONE',
    ]);

    DB::table('protypes')->insert([
      'type_id' => 2,
      'type_name' => 'LAPTOP',
    ]);
    DB::table('protypes')->insert([
      'type_id' => 3,
      'type_name' => 'TABLET',
    ]);
    DB::table('protypes')->insert([
      'type_id' => 4,
      'type_name' => 'ACCESSORY',
    ]);
    DB::table('protypes')->insert([
      'type_id' => 5,
      'type_name' => 'SWATCH',
    ]);






    DB::table('manufactures')->insert([
      'manu_id' => 1,
      'manu_name' => 'Apple',
    ]);
    DB::table('manufactures')->insert([
      'manu_id' => 2,
      'manu_name' => 'Samsung',
    ]);
    DB::table('manufactures')->insert([
      'manu_id' => 3,
      'manu_name' => 'Oppo',
    ]);
    DB::table('manufactures')->insert([
      'manu_id' => 4,
      'manu_name' => 'Xiaomi',
    ]);

    DB::table('manufactures')->insert([
      'manu_id' => 5,
      'manu_name' => 'Asus',
    ]);
    DB::table('manufactures')->where('manu_id', 2)->update([
      'manu_name' => 'Samsung',
    ]);



    DB::table('products')->insert([
      'id' => 11,
      'name' => 'Điện thoại Samsung Galaxy A13 6GB ',
      'manu_id' => 1,
      'type_id' => 1,
      'price' => 4990000,
      'image' => 'samsung-galaxy-a13-xanh-thumb-1-600x600.jpg',
      'description' =>  'Màn hình: PLS TFT LCD6.6"Full HD+,
                   Hệ điều hành:   Android 12,
                   Camera sau: Chính 50 MP & Phụ 5 MP & 2 MP & 2 MP,
                   Camera trước: 8 MP,
                   Chip: Exynos 850. RAM: 6 GB,
                   Bộ nhớ trong: 128 GB,        
                   SIM:2 Nano SIM và hỗ trợ 4G,
                   Pin và Sạc: 5000 mAh 15 W',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/04/10',
      'updated_at' => '2022/04/10',
    ]);
    //
    DB::table('products')->insert([
      'id' => 12,
      'name' => 'iPhone 12 Pro Max 128GB ',
      'manu_id' => 1,
      'type_id' => 1,
      'price' => 31499000,
      'image' => 'iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg',
      'description' =>  'Cấu hình Điện thoại iPhone 12 Pro Max 128GB,
      Màn hình: OLED, 6.7, 
      Super Retina XD R,
      Hệ điều hành: iOS 14,
      Camera sau: 3 camera 12 MP, 
      Camera trước: 12 MP,
      Chip: Apple A14 Bionic .RAM: 6 GB, 
      Bộ nhớ trong: 128 GB,
      SIM: 1 Nano SIM & 1 eSIM, 
      Hỗ trợ 5G và Pin, Sạc: 3687 mAh 20 W',
      'quantity' => 10,
      'feature' => 1,
      'created_at' => '2022/05/20',
      'updated_at' => '2022/05/20',
    ]);

    DB::table('products')->insert([
      'id' => 13,
      'name' => 'Laptop Asus VivoBook X515MA N4020/4GB/256GB/Win10 (EJ504T)',
      'manu_id' => 5,
      'type_id' => 2,
      'price' => 8990000,
      'image' => 'asus-vivobook-x515ma-n4020-ej504t-600x600.jpg',
      'description' =>  'Cấu hình Laptop Asus VivoBook X515MA N4020/4GB/256GB/Win10 (EJ504T),
      CPU: CeleronN40201.1GHz,
      RAM:4 GBDDR4 (1 khe)2400 MHz,
      Ổ cứng: 256 GB SSD NVMe PCIe và hỗ trợ khe cắm HDD SATA,
      Màn hình: 15.6"HD (1366 x 768),
      Card màn hình:Card tích hợpIntel UHD 600,
      Cổng kết nối: Jack tai nghe 3.5 mm1 x USB 3.2HDMI2 x USB 2.0USB Type-C,
      Hệ điều hành: Windows 10 Home SL. Thiết kế: Vỏ nhựa,
      Kích thước, trọng lượng: Dài 360.2 mm - Rộng 234.9 mm - Dày 19.9 mm - Nặng 1.8 kg
      Thời điểm ra mắt: 2020',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/20',
      'updated_at' => '2022/05/20',

    ]);

    DB::table('products')->insert([
      'id' => 14,
      'name' => 'Laptop Asus ZenBook UX425EA i7 1165G7/16GB/512GB/Cáp/Túi/Win10 (KI439T)',
      'manu_id' => 5,
      'type_id' => 2,
      'price' => 30190000,
      'image' => 'asus-zenbook-ux425ea-i7-ki439t-600x600.jpg',
      'description' =>  'Cấu hình Laptop Asus ZenBook UX425EA i7 1165G7/16GB/512GB/Cáp/Túi/Win10 (KI439T),
      CPU: i71165G72.8GHz,
      RAM:16 GBLPDDR4X (On board)4266 MHz,
      Ổ cứng: 512 GB SSD NVMe PCIe,
      Màn hình: 14"Full HD (1920 x 1080),
      Card màn hình:Card tích hợpIntel Iris Xe,
      Cổng kết nối: 1 x USB 3.22 x Thunderbolt 4 USB-CHDMI,
      Đặc biệt: Có đèn bàn phím,
      Hệ điều hành: Windows 10 Home SL,
      Thiết kế: Vỏ kim loại nguyên khối,
      Kích thước và trọng lượng: Dài 319 mm - Rộng 208 mm - Dày 13.9 mm - Nặng 1.17 kg,
      Thời điểm ra mắt: 2020',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/20',
      'updated_at' => '2022/05/20',
    ]);

    DB::table('products')->insert([
      'id' => 15,
      'name' => 'Laptop Asus ZenBook UX425EA i5 1135G7/8GB/512GBCáp/Túi/Win10 (KI429T)',
      'manu_id' => 5,
      'type_id' => 2,
      'price' => 23490000,
      'image' => 'asus-zenbook-ux425ea-i5-ki429t-600x600.jpg',
      'description' =>   'Cấu hình Laptop Asus ZenBook UX425EA i5 1135G7/8GB/512GBCáp/Túi/Win10 
                                   (KI429T),
                                   CPU: i51135G72.4GHz,
                                   RAM: 8 GBLPDDR4X (On board)4266 MHz,
                                   Ổ cứng: 512 GB SSD NVMe PCIe,
                                   Màn hình: 14"Full HD (1920 x 1080),
                                   Card màn hình: Card tích hợpIntel Iris Xe,
                                   Cổng kết nối: 1 x USB 3.22 x Thunderbolt 4 USB-CHDMI,
                                   Đặc biệt: Có đèn bàn phím,
                                   Hệ điều hành: Windows 10 Home SL,
                                   Thiết kế: Vỏ kim loại nguyên khối,
                                   Kích thước, trọng lượng: Dài 319 mm - Rộng 208 mm - Dày 13.9 mm - Nặng 1.17 kg,
                                   Thời điểm ra mắt: 2020',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/20',
      'updated_at' => '2022/05/20',
    ]);

    DB::table('products')->insert([
      'id' => 16,
      'name' => 'Laptop Asus TUF Gaming FX506HC i5 11400H/8GB/512GB/4GB RTX3050/144Hz/Win10 (HN002T)',
      'manu_id' => 5,
      'type_id' => 2,
      'price' => 25690000,
      'image' => 'asus-tuf-gaming-fx506hc-i5-hn002t-15-600x600.jpg',
      'description' =>  'Cấu hình Laptop Asus TUF Gaming FX506HC i5 11400H/8GB/512GB/4GB RTX3050/144Hz/W
                                       in10 (HN002T),
                                       CPU: i511400H2.7GHz,
                                       RAM: 8 GBDDR4 2 khe (1 khe 8GB + 1 khe rời)2933 MHz,
                                       Ổ cứng: 512 GB SSD NVMe PCIe và Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng,
                                       Màn hình: 15.6"Full HD (1920 x 1080)144Hz,
                                       Card màn hình: Card rờiRTX 3050 4GB,
                                       Cổng kết nối:Jack tai nghe 3.5 mmThunderbolt 4 USB-C3 x USB 3.2HDMILAN (RJ45),
                                       Đặc biệt: Có đèn bàn phím,
                                       Hệ điều hành: Windows 10 Home SL,
                                       Thiết kế: Vỏ nhựa - nắp lưng bằng kim loại,
                                       Kích thước, trọng lượng: Dài 359 mm - Rộng 256 mm - Dày 24.9 mm - Nặng 2.3 kg,
                                       Thời điểm ra mắt: 2020',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/20',
      'updated_at' => '2022/05/20',
    ]);

    //new
    DB::table('products')->insert([
      'id' => 17,
      'name' => 'Laptop Apple MacBook Pro 14 M1 Pro 2021 10-core CPU/16GB/1TB SSD/16-core GPU (MKGQ3SA/A) ',
      'manu_id' => 1,
      'type_id' => 2,
      'price' =>  64990000,
      'image' => 'apple-macbook-pro-14-m1-pro-2021-10-core-cpu-1-1-600x600.jpg',
      'description' =>  'CPU: Apple M1 Pro200GB/s memory bandwidth,
      RAM: 16 GB,
      Ổ cứng: 1 TB SSD,
      Màn hình: 14.2 inchLiquid Retina XDR display (3024 x 1964)120Hz,
      Card màn hình: Card tích hợp16 core-GPU,
      Cổng kết nối: 3 x Thunderbolt 4 USB-CHDMIJack tai nghe 3.5 mm,
      Đặc biệt: Có đèn bàn phím,
      Hệ điều hành: Mac OS,
      Thiết kế: Vỏ kim loại nguyên khối,
      Kích thước & trọng lượng: Dài 312.6 mm - Rộng 221.2 mm - Dày 15.5 mm - Nặng 1.6 kg',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/25',
      'updated_at' => '2022/05/25',
    ]);

    DB::table('products')->insert([
      'id' => 18,
      'name' => 'Laptop Apple MacBook Pro 16 M1 Pro 2021 10 core-CPU/16GB/512GB/16 core-GPU (MK183SA/A)',
      'manu_id' => 1,
      'type_id' => 2,
      'price' =>  61490000,
      'image' => 'apple-macbook-pro-16-m1-max-2021-600x600.jpg',
      'description' => 'CPU: Apple M1 Pro200GB/s memory bandwidth,
      RAM: 16 GB,
      Ổ cứng: 512 GB SSD,
      Màn hình: 16.2"Liquid Retina XDR display (3456 x 2234)120Hz,
      Card màn hình: Card tích hợp16 core-GPU,
      Cổng kết nối: 3 x Thunderbolt 4 USB-CHDMIJack tai nghe 3.5 mm,
      Đặc biệt: Có đèn bàn phím,
      Hệ điều hành: Mac OS,
      Thiết kế: Vỏ kim loại nguyên khối,
      Kích thước& trọng lượng: Dài 355.7 mm - Rộng 248.1 mm - Dày 16.8 mm - Nặng 2.2 kg',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/25',
      'updated_at' => '2022/05/25',
    ]);

    DB::table('products')->insert([
      'id' => 19,
      'name' => 'Laptop Apple MacBook Air M1 2020 16GB/256GB/7-core GPU (Z124000DE)',
      'manu_id' => 1,
      'type_id' => 2,
      'price' =>  61490000,
      'image' => 'macbook-air-m1-2020-gray-600x600.jpg',
      'description' =>  'CPU: Apple M1,
      RAM: 16 GB,
      Ổ cứng: 256 GB SSD,
      Màn hình: 13.3"Retina (2560 x 1600),
      Card màn hình: Card tích hợp7 nhân GPU,
      Cổng kết nối: 2 x Thunderbolt 3 (USB-C)Jack tai nghe 3.5 mm,
      Đặc biệt: Có đèn bàn phím,
      Hệ điều hành: Mac OS,
      Thiết kế: Vỏ kim loại nguyên khối,
      Kích thước & trọng lượng: Dài 304.1 mm - Rộng 212.4 mm - Dày 4.1 mm đến 16.1 mm - Nặng 1.29 kg',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/25',
      'updated_at' => '2022/05/25',
    ]);

    DB::table('products')->insert([
      'id' => 20,
      'name' => 'Laptop Apple MacBook Pro M1 2020 16GB/512GB (Z11C)',
      'manu_id' => 1,
      'type_id' => 2,
      'price' =>  33990000,
      'image' => 'macbook-pro-m1-2020-gray-600x600.jpg',
      'description' =>  'CPU: Apple M1,
      RAM: 16 GB,
      Ổ cứng: 512 GB SSD,
      Màn hình: 13.3"Retina (2560 x 1600),
      Card màn hình: Card tích hợp8 nhân GPU,
      Cổng kết nối: 2 x Thunderbolt 3 (USB-C)Jack tai nghe 3.5 mm,
      Đặc biệt: Có đèn bàn phím,
      Hệ điều hành: Mac OS,
      Thiết kế: Vỏ kim loại nguyên khối,
      Kích thước & trọng lượng: Dài 304.1 mm - Rộng 212.4 mm - Dày 15.6 mm - Nặng 1.4 kg',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/25',
      'updated_at' => '2022/05/25',
    ]);

    DB::table('products')->insert([
      'id' => 21,
      'name' => 'Điện thoại Samsung Galaxy M33 5G',
      'manu_id' => 2,
      'type_id' => 1,
      'price' =>  7690000,
      'image' => 'Samsung-galaxy-m53-nâu-600x600.jpg',
      'description' =>  'Màn hình: TFT LCD6.6"Full HD+,
      Hệ điều hành: Android 12,
      Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP, 2 MP,
      Camera trước: 8 MP,
      Chip: Exynos 1280 8 nhân,
      RAM: 6 GB,
      Bộ nhớ trong: 128 GB,
      SIM: 2 Nano SIM và Hỗ trợ 5G,
      Pin & Sạc: 5000 mAh25 W',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/26',
      'updated_at' => '2022/05/26',
    ]);

    DB::table('products')->insert([
      'id' => 22,
      'name' => 'Điện thoại Samsung Galaxy A23 6GB',
      'manu_id' => 2,
      'type_id' => 1,
      'price' =>  6190000,
      'image' => 'samsung-galaxy-a23-xanh-thumb-600x600.jpg',
      'description' =>  'Màn hình: PLS TFT LCD6.6"Full HD+,
      Hệ điều hành: Android 12,
      Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP, 2 MP,
      Camera trước: 8 MP,
      Chip: Snapdragon 680 8 nhân,
      RAM: 6 GB,
      Bộ nhớ trong: 128 GB,
      SIM: 2 Nano SIM và Hỗ trợ 4G,
      Pin & Sạc: 5000 mAh25 W',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/26',
      'updated_at' => '2022/05/26',
    ]);

    DB::table('products')->insert([
      'id' => 23,
      'name' => 'Điện thoại Samsung Galaxy Note 20',
      'manu_id' => 2,
      'type_id' => 1,
      'price' =>  15990000,
      'image' => 'samsung-galaxy-note-20-062220-122200-fix-600x600.jpg',
      'description' =>  'Màn hình: Super AMOLED Plus6.7"Full HD+,
      Hệ điều hành: Android 10,
      Camera sau: Chính 12 MP & Phụ 64 MP, 12 MP,
      Camera trước: 10 MP,
      Chip: Exynos 990,
      RAM: 8 GB,
      Bộ nhớ trong: 256 GB,
      SIM: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIMHỗ trợ 4G,
      Pin & Sạc: 4300 mAh25 W',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/26',
      'updated_at' => '2022/05/26',
    ]);
    DB::table('products')->insert([
      'id' => 24,
      'name' => 'Điện thoại Samsung Galaxy S22 Ultra 5G 128GB',
      'manu_id' => 2,
      'type_id' => 1,
      'price' =>  30990000,
      'image' => 'Galaxy-S22-Ultra-Burgundy-600x600.jpg',
      'description' =>  'Màn hình: Dynamic AMOLED 2X6.8"Quad HD+ (2K+),
      Hệ điều hành: Android 12,
      Camera sau: Chính 108 MP & Phụ 12 MP, 10 MP, 10 MP,
      Camera trước: 40 MP,
      Chip: Snapdragon 8 Gen 1 8 nhân,
      RAM: 8 GB,
      Bộ nhớ trong: 128 GB,
      SIM: 2 Nano SIM hoặc 1 Nano SIM + 1 eSIM và Hỗ trợ 5G,
      Pin & Sạc: 5000 mAh45 W',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/26',
      'updated_at' => '2022/05/26',
    ]);

    DB::table('products')->insert([
      'id' => 25,
      'name' => 'Ốp lưng Galaxy A01 Nhựa dẻo TPU Transparent Printing COSANO CSP862 Dâu',
      'manu_id' => 2,
      'type_id' => 4,
      'price' =>  20000,
      'image' => 'op-lung-galaxy-a01-deo-tpu-transparent-csp862-dau-1-600x600.jpg',
      'description' =>  'Kiểu dáng thời trang và đẹp mắt,
      Thiết kế vừa vặn và ôm sát thân máy,
      Dễ dàng tháo/lắp ốp vào máy',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/26',
      'updated_at' => '2022/05/26',
    ]);

    DB::table('products')->insert([
      'id' => 26,
      'name' => 'Ốp lưng Galaxy S20 Nhựa dẻo Max X Case COSANO',
      'manu_id' => 2,
      'type_id' => 4,
      'price' =>  30000,
      'image' => 'op-lung-galaxy-s20-nhua-deo-max-x-case-cosano-nude-1-600x600.jpg',
      'description' =>  'Kiểu dáng thời trang và đẹp mắt,
      Thiết kế vừa vặn và ôm sát thân máy,
      Dễ dàng tháo/lắp ốp vào máy',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/26',
      'updated_at' => '2022/05/26',
    ]);

    DB::table('products')->insert([
      'id' => 27,
      'name' => 'Ốp lưng Galaxy A21s Nhựa dẻo Mesh OSMIA',
      'manu_id' => 2,
      'type_id' => 4,
      'price' =>  20000,
      'image' => 'op-lung-galaxy-a21s-nhua-deo-mesh-osmia-xanh-ava-600x600.jpg',
      'description' =>  'Kiểu dáng thời trang và đẹp mắt,
      Thiết kế vừa vặn và ôm sát thân máy,
      Dễ dàng tháo/lắp ốp vào máy',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/26',
      'updated_at' => '2022/05/26',
    ]);

    DB::table('products')->insert([
      'id' => 28,
      'name' => 'Ốp lưng Galaxy A53 Nhựa cứng viền dẻo RACES I JM',
      'manu_id' => 2,
      'type_id' => 4,
      'price' =>  100000,
      'image' => 'op-lung-galaxy-a53-nhua-cung-vien-deo-races-i-jm-hong-thumb-600x600.jpg',
      'description' =>  'Kiểu dáng tinh giản, mặt sau của ốp lưng thiết kế trong suốt và bao bọc với đường viền hồng nhẹ nhàng, thanh lịch.,
      Tương thích cho dòng Galaxy A53 - hạn chế xước và hư hại do va chạm.,
      Chất liệu nhựa cứng viền dẻo cho độ bền cao - dễ làm sạch và tháo lắp.',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/26',
      'updated_at' => '2022/05/26',
    ]);

    DB::table('products')->insert([
      'id' => 29,
      'name' => 'Miếng dán kính iPad 10.2 inch UniQ',
      'manu_id' => 1,
      'type_id' => 4,
      'price' =>  440000,
      'image' => 'mieng-dan-kinh-ipad-102-inch-uniq-thumb-600x600.jpg',
      'description' =>  'Chống trầy xước tối ưu màn hình iPad 10.2 inch.,
      Làm giảm các dấu vân tay và vết ố.,
      Kích thước vừa vặn - dán nhanh chóng và không làm mất tính thẩm mỹ.,
      Điều khiển cảm ứng tự nhiên và cho cảm giác chân thực.',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/26',
      'updated_at' => '2022/05/26',
    ]);
    DB::table('products')->insert([
      'id' => 30,
      'name' => 'Miếng dán camera iPhone 13 Pro/13 Pro Max Mipow Xanh',
      'manu_id' => 1,
      'type_id' => 4,
      'price' =>  390000,
      'image' => 'dan-kinh-camera-ip-13-pro-13-pro-max-mipow-xanh-291121-032245-600x600.jpg',
      'description' =>  'Miếng dán kính camera viền xanh thời trang và chuyên dụng cho iPhone 13 Pro/13 Pro Max.,
      Kính trong veo - đảm bảo độ nét đạt 99% HD - giữ màu sắc - chất lượng hình chụp chuẩn đẹp.,
      Bề mặt phủ kính cường lực mịn màng - chống xước và bụi bẩn hiệu quả cho camera.,
      Viền làm từ hợp kim Aluminum sử dụng bền và chống mài mòn vật lý.,
      Thiết kế kích cỡ 3 miếng dán vừa vặn 3 camera và tháo lắp dễ dàng.',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/26',
      'updated_at' => '2022/05/26',
    ]);

    DB::table('products')->insert([
      'id' => 31,
      'name' => 'Túi đựng AirPods 1/2 Silicone CK-AP018 OSMIA Vịt Trắng',
      'manu_id' => 1,
      'type_id' => 4,
      'price' =>  65000,
      'image' => 'tui-dung-airpods-1-2-silicone-ck-ap018-osmia-vit-ava-600x600.jpg',
      'description' =>  'Thiết kế sang trọng và dễ sử dụng.,
      Chất liệu nhựa dẻo độ bền cao và kháng vỡ.,
      Bảo vệ tai nghe tốt hơn và hạn chế hư hỏng.,
      Khe hở cắm sạc dễ dàng.',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/27',
      'updated_at' => '2022/05/26',
    ]);
    DB::table('products')->insert([
      'id' => 32,
      'name' => 'Túi đựng Airpods 1 & 2 Nhựa dẻo TPUIMD NAP51',
      'manu_id' => 1,
      'type_id' => 4,
      'price' =>  65000,
      'image' => 'tui-dung-airpods-1-2-nhua-deo-tpuimd-nap51-073721-043706-600x600.jpg',
      'description' =>  'Phong cách trẻ trung và 2 màu sắc đẹp mắt.,
      Độ bền cao và kháng vỡ nhờ làm bằng chất liệu nhựa dẻo.,
      Cắm sạc dễ dàng với khe hở khoét rộng và tương thích với vị trí cổng sạc.,
      Dễ dàng gắn vào balo và móc chìa khóa với thiết kế móc treo tiện dụng.
      Nắp đậy được thiết kế tách rời tiện lợi.',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/27',
      'updated_at' => '2022/05/26',
    ]);
    DB::table('products')->insert([
      'id' => 33,
      'name' => 'Máy tính bảng Samsung Galaxy Tab S8 ',
      'manu_id' => 2,
      'type_id' => 3,
      'price' =>  20990000,
      'image' => 'Samsung-Galaxy-tab-s8-black-thumb-600x600.jpg',
      'description' =>  'Màn hình: 11"LTPS,
      Hệ điều hành: Android 12,
      Chip: Snapdragon 8 Gen 1 8 nhân,
      RAM: 8 GB,
      Bộ nhớ trong: 128 GB,
      Kết nối: 5GCó nghe gọi,
      SIM: 1 Nano SIM,
      Camera sau: Chính 13 MP & Phụ 6 MP,
      Camera trước: 12 MP,
      Pin và Sạc: 8000 mAh45 W,
      Hãng: Samsung. ',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/27',
      'updated_at' => '2022/05/26',
    ]);

    DB::table('products')->insert([
      'id' => 34,
      'name' => 'Máy tính bảng Samsung Galaxy Tab A8 (2022)',
      'manu_id' => 2,
      'type_id' => 3,
      'price' =>  8490000,
      'image' => 'samsung-galaxy-tab-a8-thumb-1-600x600.jpg',
      'description' =>  'Màn hình: 10.5"TFT LCD,
      Hệ điều hành: Android 11,
      Chip: UniSOC T618,
      RAM: 4 GB,
      Bộ nhớ trong: 64 GB,
      Kết nối: Hỗ trợ 4G Có nghe gọi,
      SIM: 1 Nano SIM,
      Camera sau: 8 MP. 
      Camera trước: 5 MP,
      Pin và Sạc: 7040 mAh15 W,
      Hãng: Samsung.',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/27',
      'updated_at' => '2022/05/26',
    ]);


    DB::table('products')->insert([
      'id' => 35,
      'name' => 'Điện thoại OPPO Reno7 Z 5G ',
      'manu_id' => 3,
      'type_id' => 1,
      'price' =>  10490000,
      'image' => 'oppo-reno7-z-5g-thumb-1-1-600x600.jpg',
      'description' =>  'Màn hình: AMOLED6.43"Full HD+,
      Hệ điều hành: Android 11,
      Camera sau: Chính 64 MP & Phụ 2 MP, 2 MP,
      Camera trước: 16 MP,
      Chip: Snapdragon 695 5G 8 nhân,
      RAM: 8 GB. Bộ nhớ trong: 128 GB,
      SIM: 2 Nano SIM (SIM 2 chung khe thẻ nhớ). Hỗ trợ 5G,
      Pin và Sạc: 4500 mAh33 W',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/27',
      'updated_at' => '2022/05/26',
    ]);

    DB::table('products')->insert([
      'id' => 36,

      'name' => 'Samsung Galaxy Watch 4 40mm Vàng Hồng ',
      'manu_id' => 2,
      'type_id' => 5,
      'price' =>  5490000,
      'image' => 'samsung-galaxy-watch-4-40mm-vang-hong-thumb-1-2-3-4-600x600.jpg',
      'description' =>  'Màn hình: SUPER AMOLED1.19 inch,
      Thời lượng pin: Khoảng 1.5 ngày,
      Kết nối với hệ điều hành: Android dùng Google Mobile Service,
      Mặt: Kính cường lực Gorrilla Glass Dx+40 mm,
      Tính năng cho sức khỏe: Theo dõi giấc ngủTính lượng calories tiêu thụ.
      Điện tâm đồ. Đo huyết áp. Đo nhịp tim. Đo nồng độ oxy (SpO2). Đếm số bước chân,
      Hãng: Samsung.',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/27',
      'updated_at' => '2022/05/26',
    ]);
    DB::table('products')->insert([
      'id' => 37,
      'name' => 'Vòng đeo tay thông minh Mi Band 6',
      'manu_id' => 4,
      'type_id' => 5,
      'price' =>  5490000,
      'image' => 'mi-band-6-thumb-1-1-600x600.jpg',
      'description' =>  'Màn hình: AMOLED1.56 inch,
      Thời lượng pin: Khoảng 15 ngày,
      Kết nối với hệ điều hành: Android 5.0 trở lên iOS 10 trở lên,
      Mặt: Kính cường lực47.4 mm,
      Dây: 22 cm,
      Tính năng cho sức khỏe: Chế độ luyện tập. Theo dõi giấc ngủ.
      Theo dõi mức độ stress. Tính lượng calories tiêu thụ.Đo nhịp tim. Đo nồng độ oxy (SpO2). Đếm số bước chân,
      Tiện ích: Báo thức. Dự báo thời tiết. Rung thông báo. Thay mặt đồng hồ. Tìm điện thoại. 
      Điều khiển chơi nhạc. Điều khiển chụp ảnh,
      Hãng: Xiaomi.',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/27',
      'updated_at' => '2022/05/26',
    ]);
    DB::table('products')->insert([
      'id' => 38,
      'name' => 'Máy tính bảng iPad Pro M1 11 inch WiFi Cellular 256GB (2021) ',
      'manu_id' => 1,
      'type_id' => 3,
      'price' =>  29990000,
      'image' => 'ipad-pro-2021-11-inch-silver-600x600.jpg',
      'description' =>  'Màn hình: 11"Liquid Retina,
      Hệ điều hành: iPadOS 15,
      Chip: Apple M1 8 nhân,
      RAM: 8 GB,
      Bộ nhớ trong: 256 GB,
      Kết nối: 5GNghe gọi qua FaceTime,
      SIM: 1 Nano SIM hoặc 1 eSIM,
      Camera sau: Chính 12 MP - Phụ 10 MP và TOF 3D LiDAR,
      Camera trước:n12 MP,
      Pin và Sạc: 28.65 Wh (~ 7538 mAh)20 W',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/27',
      'updated_at' => '2022/05/26',
    ]);
    DB::table('products')->insert([
      'id' => 39,
      'name' => 'Máy tính bảng iPad Air 5 M1 Wifi Cellular 64GB',
      'manu_id' => 1,
      'type_id' => 3,
      'price' =>  19490000,
      'image' => 'ipad-air-5-wifi-cellular-tim-thumb-600x600.jpg',
      'description' =>  'Màn hình: 10.9"Retina IPS LCD,
      Hệ điều hành: iPadOS 15,
      Chip: Apple M1 8 nhân,
      RAM: 8 GB,
      Bộ nhớ trong: 64 GB,
      Kết nối: 5GNghe gọi qua FaceTime,
      SIM: 1 Nano SIM & 1 eSIM,
      Camera sau: 12 MP,
      Camera trước: 12 MP,
      Pin và Sạc: 28.6 Wh (~ 7587 mAh)20 W',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/27',
      'updated_at' => '2022/05/26',
    ]);

    DB::table('products')->insert([
      'id' => 40,
      'name' => 'Chuột Gaming Asus TUF M3 Đen',
      'manu_id' => 5,
      'type_id' => 4,
      'price' =>  440000,
      'image' => 'chuot-gaming-asus-tuf-m3-den01-600x600.jpg',
      'description' =>  'Độ phân giải mặc định: 7000 DPI,
      Cách kết nối: Dây cắm USB và Độ dài dây/Khoảng cách kết nối,
      Dây dài: 184 cm,
      Đèn LED: Có,
      Ứng dụng điều khiển: ROG Armoury II,
      Trọng lượng: 84g,
      Thương hiệu của: Đài Loan,
      Sản xuất tại: Trung Quốc,
      Hãng: Asus.',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/27',
      'updated_at' => '2022/05/26',
    ]);
    DB::table('products')->insert([
      'id' => 41,
      'name' => 'Bàn phím có dây Gaming Asus TUF K1 ',
      'manu_id' => 5,
      'type_id' => 4,
      'price' =>  990000,
      'image' => 'co-day-gaming-asus-tuf-k1-thumb-600x600.jpg',
      'description' =>  'Tương thích: Windows,
      Cách kết nối: Dây cắm USB,
      Đèn LED: RGB. Số phím: 104 Phím,
      Thương hiệu của: Đài Loan,
      Hãng: Asus',
      'quantity' => 10,
      'feature' => 0,
      'created_at' => '2022/05/27',
      'updated_at' => '2022/05/26',
    ]);

    // admin
    DB::table('admins')->insert([

      'user_name' => 'admin',
      'password' => 'admin',
      'check_login' => 0
    ]);
  }
}
