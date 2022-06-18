<?php

namespace Database\Seeders;

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
        DB::table('products')->insert(
            [
                [
                    'name' => 'Huawei Nova 7i',
                    'manu_id' => '1',
                    'type_id' => '1',
                    'price' => '2000000',
                    'image' => 'huawei-nova-7i.jpeg',
                    'description' => 'Màn hình: LTPS LCD, 6,4", Full HD+.
            Hệ điều hành: EMUI 10 (Nền tảng Android 10).Camera sau: Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP. Camera trước: 16 MP.
            CPU: Kirin 810 8 nhân.RAM: 8 GB.
            Bộ nhớ trong: 128 GB.
            Dung lượng pin: 4200 mAh, có sạc nhanh',
                    'feature' => '0',
                    'sale' => '15'
                ],
                [
                    'name' => 'Huawei P40 Pro',
                    'manu_id' => '1',
                    'type_id' => '1',
                    'price' => '1999000',
                    'image' => 'huawei-p40-pro-plus-5g-8gb512gb.jpeg',
                    'description' => 'Màn hình rộng: 6,58 inches.
            Camera sau: 50 MP, 40MP và 8MP và TOF 3D.
            Hệ điều hành: Android 10,0 (AOSP + HMS);  EMUI 10.
            Chipset: HiSilicon Kirin 990 5G (7 nm+).
            RAM: 8 GB.
            Bộ nhớ trong ( Rom): 512 GB.
            Dung lượng pin: 4200 mAh.',
                    'feature' => '1',
                    'sale' => '20'
                ],
                [
                    'name' => 'Honor 7X 4GB',
                    'manu_id' => '1',
                    'type_id' => '1',
                    'price' => '10275999',
                    'image' => '64gb.jpeg',
                    'description' => 'Màn hình: 5,93 inch (18:9) .
            Camera trước: 8MP.
            Camera sau: 16MP + 2MP (2 Camera).
            CPU: HiSilicon Kirin 659, 8 nhân.
            Bộ nhớ: 64GB.
            RAM: 4GB',
                    'feature' => '0',
                    'sale' => '10'
                ],
                [
                    'name' => 'Huawei P30 Lite',
                    'manu_id' => '1',
                    'type_id' => '1',
                    'price' => '5490000',
                    'image' => 'huawei-p30-lite-128gb.jpeg',
                    'description' => 'Thiết kế nguyên khối, mỏng, bo tròn.
            Màn hình: 6,15 inch (1080 x 2312 pixels).
            Camera Trước/Sau: 32 MP/ 24MP + 8MP + 2MP.
            CPU: 8 nhân (4 x Cortex-A73 2,2GHz + 4 x Cortex-A53 1,7GHz).
            Bộ Nhớ: 128GB / # RAM: 6GB',
                    'feature' => '0',
                    'sale' => '10'
                ],
                [
                    'name' => 'Huawei Y5 2017',
                    'manu_id' => '1',
                    'type_id' => '1',
                    'price' => '8000000',
                    'image' => 'huawei-y5-2017.jpeg',
                    'description' => 'Màn hình: 5,0"";, HD 1280 x 720 pixels.
            CPU: MT6737T, Quad-core 1,4 GHz Cortex-A53.
            RAM/ROM: 2 GB/16 GB.
            Camera: 8 MP/5 MP.
            Pin: Li-Ion 3000 mAh',
                    'feature' => '0',
                    'sale' => '10'
                ],
                [
                    'name' => 'Samsung Galaxy A71',
                    'manu_id' => '2',
                    'type_id' => '2',
                    'price' => '5999000',
                    'image' => 'samsung-galaxy-a71-a715.jpeg',
                    'description' => 'Bộ nhớ đệm # Ram 128 GB, 8 GB.
            Kích thước màn hình  6,7 inches.
            Phiên bản hệ điều hành Android 10.
            Chipset Qualcomm Snapdragon 730.
            CPU 2 Nhân 2,2Ghz,6 nhân 1,8Ghz.
            GPU Adreno 618.
            Pin 4500 mAh.',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'Samsung Galaxy A51',
                    'manu_id' => '2',
                    'type_id' => '2',
                    'price' => '5390000',
                    'image' => 'samsung-galaxy-a51-a515.jpeg',
                    'description' => 'Bộ nhớ đệm / Ram 128 GB, 6 GB RAM.
            Bộ nhớ trong 128 GB.
            Loại màn hình Super AMOLED.
            Kích thước màn hình 6,5 inches.
            Độ phân giải màn hình 1080 x 2340 pixels.
            Hệ điều hành Android 10.
            CPU Exynos 9610.',
                    'feature' => '1',
                    'sale' => '0'
                ],               
                [
                    'name' => 'Samsung Galaxy M20',
                    'manu_id' => '2',
                    'type_id' => '2',
                    'price' => '4000000',
                    'image' => 'samsung-galaxy-m20.jpeg',
                    'description' => 'Màn hình: PLS TFT LCD, 6,3 inch, Full HD+.
            CPU: Exynos 7904 8 nhân 64-bit.
            RAM: 3 GB.
            Camera sau: 13 MP và 5 MP (2 camera).
            Camera trước: 8 MP.
            Bộ nhớ trong: 32 GB.
            Hệ điều hành: Android 8 (Oreo).
            Pin: 5000 mAh.',
                    'feature' => '0',
                    'sale' => '20'
                ],
                [
                    'name' => 'SAMSUNG Galaxy Note 10+',
                    'manu_id' => '2',
                    'type_id' => '2',
                    'price' => '13989999',
                    'image' => 'samsung-galaxy-note-10-12gb256gb.jpeg',
                    'description' => 'Hỗ trợ kết nối di động tốc độ cao 5G.
            Màn hình Dynamic AMOLED 68" QHD+ sắc nét.
            Chip Exynos 9825 8 nhân mạnh mẽ.
            Cụm 4 camera sau: 12MP (f/1,5-2,4, 27mm, wide) + 12MP (f/2,1, 52mm, telephoto) + 16MP (f/2,2, 12mm, ultrawide) + TOF 3D VGA camera.
            Pin khỏe 4300mAh, hỗ trợ sạc nhanh tối đa lên đến 45W, sạc không dây.
            Bút S-Pen thần thánh thế hệ mới.',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Samsung Galaxy A50s',
                    'manu_id' => '2',
                    'type_id' => '2',
                    'price' => '4750000',
                    'image' => 'samsung-galaxy-a50s-a507-64gb.jpeg',
                    'description' => 'Màn hình: Super AMOLED, 6,4 inches, Full HD+ 1080 x 2340 pixels.
            Hệ điều hành: Android 9,0 (Pie).
            Camera sau: Chính 48 MP & Phụ 8 MP, 5 MP.
            Camera trước: 32MP.
            CPU: Exynos 9610 8 nhân 64-bit.
            RAM: 4GB.
            Bộ nhớ trong: 64GB.',
                    'feature' => '0',
                    'sale' => '30'
                ],
                [
                    'name' => 'iPhone 11',
                    'manu_id' => '3',
                    'type_id' => '3',
                    'price' => '8899000',
                    'image' => 'apple-iphone-11-64gb.jpeg',
                    'description' => '- Màn hình 6,1 inch Liquid Retina HD công nghệ True Tone.
            - Độ phân giải 1792 x 828 pixels.
            - Camera kép 12MP (ƒ/1,8 góc rộng và ƒ/2,4 siêu rộng) hỗ trợ chế độ ban đêm.
            - Camera TrueDepth 12MP - ƒ/2,2 quay video 4K lên đến 60fps.
            - Chip A13 Bionic gen 3 Neural Engine.
            - Lưu trữ 64GB.
            - Chuẩn chống nước IP68 (độ sâu 2m tối đa 30 phút).',
                    'feature' => '1',
                    'sale' => '10'
                ],
                [
                    'name' => 'iPhone 11 Pro Max',
                    'manu_id' => '3',
                    'type_id' => '3',
                    'price' => '17899000',
                    'image' => 'apple-iphone-11-pro-max-64gb.jpeg',
                    'description' => '- Màn hình 6,1 inch Liquid Retina HD công nghệ True Tone.
            - Độ phân giải 1792 x 828 pixels.
            - Camera kép 12MP (ƒ/1,8 góc rộng và ƒ/2,4 siêu rộng) hỗ trợ chế độ ban đêm.
            - Camera TrueDepth 12MP - ƒ/2,2 quay video 4K lên đến 60fps.
            - Chip A13 Bionic gen 3 Neural Engine.
            - Lưu trữ 64GB.
            - Chuẩn chống nước IP68 (độ sâu 2m tối đa 30 phút).',
                    'feature' => '1',
                    'sale' => '5'
                ],
                [
                    'name' => 'iPhone 12 Pro Max',
                    'manu_id' => '3',
                    'type_id' => '3',
                    'price' => '27198999',
                    'image' => 'iphone-12-pro-max-128gb.jpeg',
                    'description' => '- Màn hình: 6,7 inch Tấm nền OLED.
            - Super Rentina XDR.
            - Độ phân giải: 1284 x 2778.
            - Chipset/ CPU: Apple A14 Bionic.
            - Bộ nhớ trong (ROM): 128Gb.
            - Hệ điều hành: IOS 14.
            - Kết nối : 5G.',
                    'feature' => '0',
                    'sale' => '20'
                ],
                [
                    'name' => 'Apple iPhone 11',
                    'manu_id' => '3',
                    'type_id' => '3',
                    'price' => '1299898',
                    'image' => 'apple-iphone-11-128gb.jpeg',
                    'description' => '- Màn hình 6,1 inch Liquid Retina HD công nghệ True Tone.
            - Độ phân giải 1792 x 828 pixels.
            - Camera kép 12MP (ƒ/1,8 góc rộng và ƒ/2,4 siêu rộng) hỗ trợ chế độ ban đêm.
            - Camera TrueDepth 12MP - ƒ/2,2 quay video 4K lên đến 60fps.
            - Chip A13 Bionic gen 3 Neural Engine.
            - Lưu trữ 128GB.
            - Chuẩn chống nước IP68 (độ sâu 2m tối đa 30 phút).',
                    'feature' => '0',
                    'sale' => '20'
                ],
                [
                    'name' => 'iPhone 12 64GB',
                    'manu_id' => '3',
                    'type_id' => '3',
                    'price' => '16398999',
                    'image' => 'iphone-12-64gb.jpeg',
                    'description' => '* Chip: A14 Bionic chip.
            * Dung lượng: 64GB.
            * SIM (nano-SIM and eSIM).
            * Màn hình: Retina XDR 6,1‑inch OLED Multi‑Touch.
            * Chống bụi, nước chuẩn Rated IP68.
            * Kết nối 5G, Sạc không dây chuẩn QI, MagSafe.
            * Hệ điều hành: iOS 14.',
                    'feature' => '0',
                    'sale' => '10'
                ],
                [
                    'name' => 'Xiaomi Redmi Note 2',
                    'manu_id' => '4',
                    'type_id' => '4',
                    'price' => '1198995',
                    'image' => 'xiaomi-redmi-note-2-16gb.jpeg',
                    'description' => 'Màn hình IPS 5,5 inch Full HD(1080x1920pixels).
            Chip MediaTek Hellio X10 MTK 6795 8 nhân trên nền tảng 64 bit
            Rom 16GB.
            Ram 2GB.
            Camera trước 5,0 megapixels.',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'Xiaomi Redmi Note 3',
                    'manu_id' => '4',
                    'type_id' => '4',
                    'price' => '1450000',
                    'image' => 'xiaomi-redmi-note-3-32gb.jpg',
                    'description' => 'Màn hình: Full HD, 5,5", 1080 x 1920 pixels.
            Camera sau: 13 MP, Quay phim FullHD 1080p@30fps.
            Camera trước: 5 MP.
            Hệ điều hành: Android 5,1 (Lollipop).
            CPU: MT6795 (Helio x10), 8 nhân, 2,2 GHz.
            Chip đồ hoạ: PowerVR G6200.
            RAM: 3GB.
            Bộ nhớ trong: 32GB.',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'Xiaomi Redmi Note 4',
                    'manu_id' => '4',
                    'type_id' => '4',
                    'price' => '1580000',
                    'image' => '32gb.jpeg',
                    'description' => 'Màn hình: IPS LCD, 5,5", Full HD.
            Hệ điều hành: Android 6,0 (Marshmallow).
            Camera sau: 13 MP/Camera trước: 5 MP.
            CPU: Snapdragon 625 8 nhân 64-bit.
            RAM: 3 GB/Bộ nhớ trong: 32 GB.',
                    'feature' => '0',
                    'sale' => '0'
                ],
                [
                    'name' => 'Xiaomi Redmi 4X',
                    'manu_id' => '4',
                    'type_id' => '4',
                    'price' => '2000000',
                    'image' => 'xiaomi-redmi-4x-32gb.jpg',
                    'description' => 'Màn hình: IPS LCD, 5", HD.
            Hệ điều hành: Android 6,0 (Marshmallow).
            Camera sau: 13 MP. Camera trước: 5 MP.
            CPU: Snapdragon 435 8 nhân.
            RAM: 3 GB. - Bộ nhớ trong: 32 GB.
            Dung lượng pin: 4100 mAh.',
                    'feature' => '1',
                    'sale' => '10'
                ],
                [
                    'name' => 'Xiaomi MiMax 3',
                    'manu_id' => '4',
                    'type_id' => '4',
                    'price' => '7900000',
                    'image' => '4gb.jpeg',
                    'description' => 'Kích cỡ màn hình: 6,9" Full HD+ 1080 x 2160 pixels, 18: 9 ratio.
            Bộ nhớ trong: 64Gb / 4Gb RAM.
            Camera chính: 12 MP, f/1,9, 1,4µm, dual pixel PDAF 5 MP, depth sensor.
            Camera phụ: 8 MP, f/2,0, 1,12µm.
            Hệ điều hành: Android 8,1 (Oreo) MIUI 9,5.
            Bộ xử lý: Octa-core 1,8 GHz Kryo 260.
            Chipset: Qualcomm SDM636 Snapdragon 636 GPU : Adreno 509.
            Pin chuẩn: Non-removable Li-Ion 5500 mAh battery.',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'OPPO F11 Pro',
                    'manu_id' => '5',
                    'type_id' => '5',
                    'price' => '4989000',
                    'image' => 'oppo-f11-pro-128gb.jpeg',
                    'description' => 'Kích cỡ màn hình: 6,9" Full HD+ 1080 x 2160 pixels, 18: 9 ratio.
            Bộ nhớ trong: 64Gb / 4Gb RAM.
            Camera chính: 12 MP, f/1,9, 1,4µm, dual pixel PDAF 5 MP, depth sensor.
            Camera phụ: 8 MP, f/2,0, 1,12µm.
            Hệ điều hành: Android 8,1 (Oreo) MIUI 9,5.
            Bộ xử lý: Octa-core 1,8 GHz Kryo 260.
            Chipset: Qualcomm SDM636 Snapdragon 636 GPU : Adreno 509.
            Pin chuẩn: Non-removable Li-Ion 5500 mAh battery.',
                    'feature' => '1',
                    'sale' => '0'
                ],
                [
                    'name' => 'OPPO F11',
                    'manu_id' => '5',
                    'type_id' => '5',
                    'price' => '5500000',
                    'image' => 'oppo-f11.jpeg',
                    'description' => '- Thiết kế trẻ trung, năng động và hợp xu hướng.
                    - Màn hình giọt nước kích thước 6,53 inch.
                    - Camera kép phía sau 48MP (f/1,8) + 5MP(f/2,4).
                    - Camera selife 16MP (f/2,0).
                    - Công nghệ sạc nhanh độc quyền Super VOOC 3,0.
                    - Pin dung lượng lên đến 4000mAh.',
                    'feature' => '1',
                    'sale' => '0'
                ], [
                    'name' => 'OPPO F11',
                    'manu_id' => '5',
                    'type_id' => '5',
                    'price' => '5500000',
                    'image' => 'oppo-f11.jpeg',
                    'description' => '- Thiết kế trẻ trung, năng động và hợp xu hướng.
            - Màn hình giọt nước kích thước 6,53 inch.
            - Camera kép phía sau 48MP (f/1,8) + 5MP(f/2,4).
            - Camera selife 16MP (f/2,0).
            - Công nghệ sạc nhanh độc quyền Super VOOC 3,0.
            - Pin dung lượng lên đến 4000mAh.',
                    'feature' => '1',
                    'sale' => '0'
                ], [
                    'name' => 'Oppo Reno 2F',
                    'manu_id' => '5',
                    'type_id' => '5',
                    'price' => '6990000',
                    'image' => 'oppo-reno-2f-8gb128gb.jpeg',
                    'description' => 'Kích thước màn hình: Panoramic 6,53"".
            Độ phân giải màn hình: FHD+.
            Chip xử lý (CPU): MediaTek Helio P708 nhân, 2,1GHz.
            RAM: 8GB.
            Máy ảnh chính: 4 camera, 48 MP + 8 MP + 2 MP + 2 MP.
            Bộ nhớ trong: 128 GB.
            Dung lượng pin (mAh): 4000mAh (Typ).',
                    'feature' => '0',
                    'sale' => '20'
                ], [
                    'name' => 'Oppo A5 2020',
                    'manu_id' => '5',
                    'type_id' => '5',
                    'price' => '4290000',
                    'image' => 'oppo-a5-2020-128gb.jpeg',
                    'description' => 'Kích thước màn hình: 6,5 inches.
            Hệ điều hành: Android 9,0 (Pie).
            Chip xử lý (CPU): Snapdragon 665.
            RAM: 4 GB.
            Bộ nhớ trong: 128 GB.
            Dung lượng pin (mAh): 5000 mAh.',
                    'feature' => '0',
                    'sale' => '25'
                ]
            ]
        );
        DB::table('admin')->insert([[
            'username' => 'admin',
            'password' => 'admin'
        ], [
            'username' => 'user1',
            'password' => 'user1'
        ]]);
        DB::table('manufactures')->insert([
            [
                'manu_id' => '1',
                'manu_name' => 'Huwei'
            ],
            [
                'manu_id' => '2',
                'manu_name' => 'Samsung'
            ],
            [
                'manu_id' => '3',
                'manu_name' => 'Apple'
            ],
            [
                'manu_id' => '4',
                'manu_name' => 'Xiaomi'
            ],
            [
                'manu_id' => '5',
                'manu_name' => 'Oppo'
            ]
        ]);
        DB::table('protypes')->insert([
            [
                'protype_id' => '1',
                'protype_name' => 'Taiwan'
            ],
            [
                'protype_id' => '2',
                'protype_name' => 'Korea'
            ],
            [
                'protype_id' => '3',
                'protype_name' => 'USA'
            ],
            [
                'protype_id' => '4',
                'protype_name' => 'China'
            ],
            [
                'protype_id' => '5',
                'protype_name' => 'VietNam'
            ]
        ]);
    }
}
