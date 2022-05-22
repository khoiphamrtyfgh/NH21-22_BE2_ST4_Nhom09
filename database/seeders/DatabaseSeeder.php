<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException ;


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
                     'id' => 4 ,
            'name' => 'OPPO Reno6 Z 5G',
                'manu_id' =>3,
            'type_id' =>1,
            'price' =>9490000,
            'image'=> 'oppo-reno6-z-5g-aurora-1-600x600.jpg',
         'description' =>  '      
      Cấu hình Điện thoại OPPO Reno6 Z 5G\r\nMàn hình: AMOLED,6.43\",Full HD+\r\nHệ điều hành: Android 11\r\nCamera sau: Chính 64 MP & Phụ 8 MP, 2 MP\r\nCamera trước:32 MP\r\nChip: MediaTek Dimensity 800U 5G\r\nRAM: 8 GB\r\nBộ nhớ trong: 128 GB\r\nSIM:2 Nano SIM, Hỗ trợ 5G\r\nPin, Sạc:4310 mAh,30 W ',
       'quantity' => 10,
      'feature' => 1,
         'created_at' => '2022/04/10',
         'updated_at' => '2022/04/10',
        ]);
        DB::table('products')->insert([
            'id' => 7 ,
            'name' => 'Oppo Watch 46mm dây silicone',
                'manu_id' =>3,
            'type_id' =>5,
            'price' =>7990000,
            'image'=> 'oppo-watch-46mm-day-silicone-thumb-1-1-600x600.jpg',
         'description' =>  '
         Cấu hình Oppo Watch 46mm dây silicone vàng đồng\r\nMàn hình:AMOLED,1.91 inch\r\nThời lượng pin: Khoảng 21 ngày (chế độ tiết kiệm pin),Khoảng 36 giờ (chế độ thường)\r\nKết nối với hệ điều hành: Android 6.0 trở lên, iOS 12 trở lên\r\nMặt: Kính cường lực,46 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đo nhịp tim, Đếm số bước chân',
         'quantity' => 10,
         'feature' => 1,
         'created_at' => '2022/04/10',
         'updated_at' => '2022/04/10',
        ]);
        DB::table('products')->insert([
            'id' => 8 ,
            'name' => 'Oppo Watch 41mm dây silicone',
                'manu_id' =>3,
            'type_id' =>5,
            'price' =>7990000,
            'image'=> 'oppo-watch-41mm-day-silicone-thumb-1-1-600x600.jpg',
         'description' =>  '
         Cấu hình Oppo Watch 41mm dây silicone đen\r\nMàn hình:AMOLED,1.6 inch\r\nThời lượng pin: Khoảng 14 ngày (chế độ tiết kiệm pin),Khoảng 24 giờ (chế độ thường)\r\nKết nối với hệ điều hành: Android 6.0 trở lên, iOS 12 trở lên\r\nMặt: Kính cường lực,41 mm\r\nTính năng cho sức khỏe: Chế độ luyện tập, Theo dõi giấc ngủ, Tính lượng calories tiêu thụ, Tính quãng đường chạy, Đo nhịp tim, Đếm số bước chân',
         'quantity' => 10,
         'feature' => 1,
         'created_at' => '2022/04/10',
         'updated_at' => '2022/04/10',
        ]);
        DB::table('products')->insert([
            'id' => 9 ,
'name' => 'Xiaomi 11 Lite 5G NE',
    'manu_id' =>4,
'type_id' =>1,
'price' =>9490000,
'image'=> 'xiaomi-11-lite-5g-ne-pink-600x600.jpg',
'description' =>  '
Cấu hình Điện thoại Xiaomi 11 Lite 5G NE\r\nMàn hình:AMOLED,6.55\",Full HD+\r\nHệ điều hành:Android 11\r\nCamera sau: Chính 64 MP & Phụ 8 MP, 5 MP\r\nCamera trước: 20 MP\r\nChip: Snapdragon 778G 5G 8 nhân\r\nRAM:8 GB\r\nBộ nhớ trong:128 GB\r\nSIM:2 Nano SIM (SIM 2 chung khe thẻ nhớ),Hỗ trợ 5G\r\nPin, Sạc:4250 mAh,33 W\r\nHãng: Xiaomi.',
'quantity' => 10,
'feature' => 0,
'created_at' => '2022/04/10',
'updated_at' => '2022/04/10',
        ]);
        DB::table('products')->insert([
            'id' => 6 ,
            'name' => 'Tai nghe Bluetooth True Wireless OPPO ENCO Buds ETI81',
                'manu_id' =>3,
            'type_id' =>4,
            'price' =>790000,
            'image'=> 'bluetooth-tws-oppo-enco-buds-eti81-ava-1-600x600.jpg',
         'description' =>  '
         Thông số kỹ thuật Tai nghe Bluetooth True Wireless OPPO ENCO Buds ETI81\r\nThời gian tai nghe: Dùng 6 giờ - Sạc 2.5 giờ\r\nThời gian hộp sạc: Dùng 24 giờ - Sạc 2.5 giờ\r\nCổng sạc: Type-C\r\nTương thích: Android, iOS (iPhone, iPad), Windows\r\nTiện ích: Chống nước\r\nĐiều khiển bằng: Cảm ứng chạm\r\nHãng: OPPO.',
         'quantity' => 10,
         'feature' => 1,
         'created_at' => '2022/04/10',
         'updated_at' => '2022/04/10',
        ]);
        DB::table('products')->insert([
            'id' => 5 ,
            'name' => 'OPPO Find X3 Pro 5G',
                'manu_id' =>3,
            'type_id' =>1,
            'price' =>26990000,
            'image'=> 'oppo-find-x3-pro-black-001-1-600x600.jpg',
         'description' =>  '
         Cấu hình Điện thoại OPPO Find X3 Pro 5G\r\nMàn hình:AMOLED,6.7\",Quad HD+ (2K+)\r\nHệ điều hành:Android 11\r\nCamera sau:Chính 50 MP & Phụ 50 MP, 13 MP, 3 MP\r\nCamera trước:32 MP\r\nChip:Snapdragon 888\r\nRAM:12 GB\r\nBộ nhớ trong:256 GB\r\nSIM:2 Nano SIM,Hỗ trợ 5G\r\nPin, Sạc:4500 mAh,65 W',
         'quantity' => 10,
         'feature' => 0,
         'created_at' => '2022/04/10',
         'updated_at' => '2022/04/10',
        ]);

         DB::table('products')->insert([
'id' => 10 ,
'name' => 'Xiaomi Pad 5 256GB',
    'manu_id' =>4,
'type_id' =>3,
'price' =>10490000,
'image'=> 'xiaomi-pad-5-grey-600x600.jpg',
'description' =>  '
Cấu hình Máy tính bảng Xiaomi Pad 5 256GB\r\nMàn hình:11\",IPS LCD\r\nHệ điều hành: Android 11\r\nChip: Snapdragon 860 8 nhân\r\nRAM:6 GB\r\nBộ nhớ trong:256 GB\r\nCamera sau:13 MP\r\nCamera trước:8 MP\r\nPin, Sạc:8720 mAh,33 W\r\nHãng: Xiaomi',
'quantity' => 10,
'feature' => 0,
'created_at' => '2022/04/10',
'updated_at' => '2022/04/10',




    //  
              ]);

              DB::table('products')->insert([
                'id' => 1 ,
                        'name' => 'Điện thoại iPhone 13 Pro Max 256GB',
                            'manu_id' =>1,
                        'type_id' =>1,
                        'price' =>36990000,
                        'image'=> 'iphone-13-pro-max-xanh-la-thumb-600x600.jpg',
                     'description' =>  '
                     Màn hình:  OLED6.7"Super Retina XDR
                     Hệ điều hành:iOS 15
                     Camera sau:3 camera 12 MP
                     Camera trước: 12 MP
                     Chip:Apple A15 Bionic
                     RAM: 6 GB
                     Bộ nhớ trong:256 GB
                     SIM:1 Nano SIM & 1 eSIMHỗ trợ 5G
                     Pin, Sạc:4352 mAh20 W ',
                     'quantity' => 10,
                     'feature' => 1,
                     'created_at' => '2022/04/10',
                     'updated_at' => '2022/04/10'
            
                 
            ]);
              DB::table('products')->insert([
                'id' => 2 ,
                        'name' => 'Điện thoại iPhone 11 64GB',
                            'manu_id' =>1,
                        'type_id' =>1,
                        'price' =>16290000,
                        'image'=> 'iphone-xi-do-600x600.jpg',
                     'description' =>  '
                     Màn hình:  IPS LCD6.1"Liquid Retina
                     Hệ điều hành:iOS 15
                     Camera sau:3 camera 12 MP
                     Camera trước: 12 MP
                     Chip:Apple A15 Bionic
                     RAM: 4 GB
                     Bộ nhớ trong:64 GB
                     SIM:1 Nano SIM & 1 eSIMHỗ trợ 4G
                     Pin, Sạc:3110 mAh18 W
                   ',
                   'quantity' => 10,
                     'feature' => 1,
                     'created_at' => '2022/04/10',
                     'updated_at' => '2022/04/10',
                      ]);

              DB::table('products')->insert([
           'id' => 3 ,
             'name' => 'Điện thoại Samsung Galaxy A13 6GB ',
                 'manu_id' =>1,
             'type_id' =>1,
             'price' =>4990000,
             'image'=>'samsung-galaxy-a13-xanh-thumb-1-600x600.jpg',
          'description' =>  'Màn hình: PLS TFT LCD6.6"Full HD+
          Hệ điều hành:   Android 12
          Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP, 2 MP
          Camera trước: 8 MP
          Chip: Exynos 850
          RAM: 6 GB  
          Bộ nhớ trong: 128 GB        
          SIM:2 Nano SIMHỗ trợ 4G
          Pin, Sạc:  5000 mAh15 W',
          'quantity' => 10,
          'feature' => 1,
          'created_at' => '2022/04/10',
          'updated_at' => '2022/04/10',
            ]);
 
              DB::table('protypes')->insert([
                'type_id' => 1 ,
                'type_name' => 'điện thoại',              
              ]);
              
              DB::table('protypes')->insert([
                     'type_id' =>2,
                'type_name' =>'laptop',
            ]);
            DB::table('protypes')->insert([
                'type_id' =>3,
                'type_name' =>'Tablet',
            ]);
            DB::table('protypes')->insert([
                'type_id' =>4,
                'type_name' =>'Phụ kiện',
            ]);
            DB::table('protypes')->insert([
                  'type_id' =>5,
                 'type_name' =>'Đồng hồ',
            ]);
                    
             
           
                
                   
      
       DB::table('manufactures')->insert([
         'manu_id' => 1 ,
           'manu_name' => 'Apple',    
            ]);
            DB::table('manufactures')->insert([
                          'manu_id' =>2,
           'manu_name' =>'Samsung',
            ]);
            DB::table('manufactures')->insert([
                      'manu_id' => 3 ,
           'manu_name' => 'Oppo',
            ]);
            DB::table('manufactures')->insert([
                  'manu_id' =>4,
           'manu_name' =>'Xiaomi',
            ]);
           
            DB::table('manufactures')->insert([
                'manu_id' =>5,
                'manu_name' =>'Asus',
            ]);


            DB::table('users')->insert([
              'id' => 1 ,
                'name' => 'kien',
                      'email' => 'truongkien0815@gmail.com',
                'email_verified_at' =>'2022/04/10',
                'password' => 1 ,
                'remember_token' => '1',
            'created_at' =>'2022/04/10',
           
             'updated_at' =>'2022/04/10',

           
                 ]);


            DB::table('users')->insert([
               
                    'id' => 2 ,
                    'name' => 'kien',
                          'email' => 'truongkien@gmail.com',
                    'email_verified_at' =>'2022/04/10',
                    'password' => 1 ,
                    'remember_token' => '1',
                'created_at' =>'2022/04/10',
               
                 'updated_at' =>'2022/04/10',
                     ]);
           
            
           
            DB::table('manufactures') ->where('manu_id', 2)->update([
                 'manu_name' => 'Samsung',
                  ]);
             
                  

                  DB::table('products')->insert([
                    'id' => 11 ,
                      'name' => 'Điện thoại Samsung Galaxy A13 6GB ',
                          'manu_id' =>1,
                      'type_id' =>1,
                      'price' =>4990000,
                      'image'=>'samsung-galaxy-a13-xanh-thumb-1-600x600.jpg',
                   'description' =>  'Màn hình: PLS TFT LCD6.6"Full HD+
                   Hệ điều hành:   Android 12
                   Camera sau: Chính 50 MP & Phụ 5 MP, 2 MP, 2 MP
                   Camera trước: 8 MP
                   Chip: Exynos 850
                   RAM: 6 GB  
                   Bộ nhớ trong: 128 GB        
                   SIM:2 Nano SIMHỗ trợ 4G
                   Pin, Sạc:  5000 mAh15 W',
                   'quantity' => 10,
                   'feature' => 1,
                   'created_at' => '2022/04/10',
                   'updated_at' => '2022/04/10',
                     ]);
                 //
                     DB::table('products')->insert([
                        'id' => 12 ,
                          'name' => 'iPhone 12 Pro Max 128GB ',
                              'manu_id' =>1,
                          'type_id' =>1,
                          'price' =>31499000,
                          'image'=>'iphone-12-pro-max-xanh-duong-new-600x600-600x600.jpg',
                       'description' =>  'Cấu hình Điện thoại iPhone 12 Pro Max 128GB\r\nMàn hình: OLED, 6.7\", Super Retina XD
                       R\r\nHệ điều hành: iOS 14\r\nCamera sau: 3 camera 12 MP\r\nCamera trước: 12 MP\r\nChip:
                        Apple A14 Bionic\r\nRAM: 6 GB\r\nBộ nhớ trong: 128 GB\
                       r\nSIM: 1 Nano SIM & 1 eSIM, Hỗ trợ 5G\r\nPin, Sạc: 3687 mAh, 20 W',
                       'quantity' => 10,
                       'feature' => 1,
                       'created_at' => '2022/05/20',
                       'updated_at' => '2022/05/20',
                         ]);

                         DB::table('products')->insert([
                            'id' => 13 ,
                              'name' => 'Laptop Asus VivoBook X515MA N4020/4GB/256GB/Win10 (EJ504T)',
                                  'manu_id' =>5,
                              'type_id' =>2,
                              'price' =>8990000,
                              'image'=>'asus-vivobook-x515ma-n4020-ej504t-600x600.jpg',
                           'description' =>  'Cấu hình Laptop Asus VivoBook X515MA N4020/4GB/256GB/Win10 (EJ504T)\r\nCPU: Celeron, N4020, 1.1GHz\r\nRAM: 4 GB, DDR4 (1 khe), 2400 MHz\r\nỔ cứng: Hỗ trợ khe cắm HDD SATA, SSD 256 GB NVMe PCIe\r\nMàn hình: 15.6\", Full HD (1920 x 1200)\r\nCard màn hình: Card tích hợp, Intel UHD 600\r\nCổng kết nối: 1 x USB 3.2, 2 x USB 2.0, HDMI, Jack tai nghe 3.5 mm, USB Type-C\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ nhựa\r\nKích t
                           hước, trọng lượng: Dài 360.2 mm - Rộng 234.9 mm - Dày 19.9 mm - Nặng 1.8 kg\r\nThời điểm ra mắt: 2020',
                           'quantity' => 10,
                           'feature' => 0,
                           'created_at' => '2022/05/20',
                           'updated_at' => '2022/05/20',
                             ]);

                             DB::table('products')->insert([
                                'id' => 14 ,
                                  'name' => 'Laptop Asus ZenBook UX425EA i7 1165G7/16GB/512GB/Cáp/Túi/Win10 (KI439T)',
                                      'manu_id' =>5,
                                  'type_id' =>2,
                                  'price' =>30190000,
                                  'image'=>'asus-zenbook-ux425ea-i7-ki439t-600x600.jpg',
                               'description' =>  'Cấu hình Laptop Asus ZenBook UX425EA i7 1165G7/16GB/512GB/Cáp/Túi/Win10 (KI439T)\r\nCPU
                               : i7, 1165G7, 2.8GHz\r\nRAM: 16 GB, LPDDR4X (On board), 4266 MHz\r\nỔ cứng: SSD 512 GB NVMe PCIe\r\n
                               Màn hình: 14\", Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợp, Intel Iris Xe\r\nCổng kết nối: 2 x T
                               hunderbolt 4 USB-C, 1 x USB 3.2HDMI\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: V
                               ỏ kim loại nguyên khối\r\nKích thước, trọng lượng: Dài 319 mm - Rộng 208 mm - Dày 13.9 mm - Nặng 1.17 kg\r\nThời điểm 
                               ra mắt: 2020',
                               'quantity' => 10,
                               'feature' => 0,
                               'created_at' => '2022/05/20',
                               'updated_at' => '2022/05/20',
                                 ]);

                                 DB::table('products')->insert([
                                    'id' => 15 ,
                                      'name' => 'Laptop Asus ZenBook UX425EA i5 1135G7/8GB/512GBCáp/Túi/Win10 (KI429T)',
                                          'manu_id' => 5,
                                      'type_id' => 2,
                                      'price' => 23490000,
                                      'image'=>'asus-zenbook-ux425ea-i5-ki429t-600x600.jpg',
                                   'description' =>   'Cấu hình Laptop Asus ZenBook UX425EA i5 1135G7/8GB/512GBCáp/Túi/Win10 
                                   (KI429T)\r\nCPU: i5, 1135G7, 2.4GHz\r\nRAM: 8 GB, LPDDR4X (On board), 4266 MHz\r\nỔ cứng: SSD 512 GB NVMe PCIe\r\nM
                                   àn hình: 14\", Full HD (1920 x 1080)\r\nCard màn hình: Card tích hợp, Intel Iris Xe\r\nCổng kết nối: 1 x USB 3.2, 2 
                                   x Thunderbolt 4 USB-C, HDMI\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế: Vỏ kim loại
                                    nguyên khối\r\nKích thước, trọng lượng: Dài 319 mm - Rộng 208 mm - Dày 13.9 mm - Nặng 1.17 kg\r\nThời điểm ra mắt:
                                    2020',
                                   'quantity' => 10,
                                   'feature' => 0,
                                   'created_at' => '2022/05/20',
                                   'updated_at' => '2022/05/20',
                                     ]);

                                     DB::table('products')->insert([
                                        'id' => 16 ,
                                          'name' => 'Laptop Asus TUF Gaming FX506HC i5 11400H/8GB/512GB/4GB RTX3050/144Hz/Win10 (HN002T)',
                                              'manu_id' =>5,
                                          'type_id' =>2,
                                          'price' =>25690000,
                                          'image'=>'asus-tuf-gaming-fx506hc-i5-hn002t-15-600x600.jpg',
                                       'description' =>  'Cấu hình Laptop Asus TUF Gaming FX506HC i5 11400H/8GB/512GB/4GB RTX3050/144Hz/W
                                       in10 (HN002T)\r\nCPU: i5, 11400H, 2.7GHz\r\nRAM: 8 GB, DDR4 2 khe (1 khe 8GB + 1 khe rời), 2933 MHz\r\nỔ cứng
                                       : SSD 512 GB NVMe PCIe, Hỗ trợ thêm 1 khe cắm SSD M.2 PCIe mở rộng\r\nMàn hình: 15.6\", Full HD (1920 x 1080), 
                                       144Hz\r\nCard màn hình: Card rời, RTX 3050 4GB\r\nCổng kết nối: Jack tai nghe 3.5 mm, Thunderbolt 4 USB-C,
                                        3 x USB 3.2, HDMI, LAN (RJ45)\r\nĐặc biệt: Có đèn bàn phím\r\nHệ điều hành: Windows 10 Home SL\r\nThiết kế
                                        : Vỏ nhựa - nắp lưng bằng kim loại\r\nKích thước, trọng lượng: Dài 359 mm - Rộng 256 mm - Dày 24.9 mm - Nặng
                                         2.3 kg\r\nThời điểm ra mắt: 2020',
                                       'quantity' => 10,
                                       'feature' => 0,
                                       'created_at' => '2022/05/20',
                                       'updated_at' => '2022/05/20',
                                         ]);

                                         
                                    
                         
 


          
    }
}
