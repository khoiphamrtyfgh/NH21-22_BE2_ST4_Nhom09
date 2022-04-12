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
                        'image'=> 'iphone_13_promax.jpg',
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
                        'image'=> 'iphone_11_16GB_New.jpg',
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
                 'type_name' =>'Đồng hồ thông minh',
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
             
                  
          
    }
}
