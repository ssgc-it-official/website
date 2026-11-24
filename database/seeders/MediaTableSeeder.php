<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('media')->delete();
        
        \DB::table('media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'model_type' => 'App\\Models\\Board',
                'model_id' => 3,
                'uuid' => '404bec07-51c4-40f8-a1a7-d44629fab0fe',
                'collection_name' => 'bod',
                'name' => 'o6P7gy1vdD2doifnCET8TYFFWSRduOyduWon7kJ8',
                'file_name' => 'PIC-05.png',
                'mime_type' => 'image/png',
                'disk' => 'public',
                'conversions_disk' => 'public',
                'size' => 2010656,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"preview":true,"webp":true,"thumb":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2026-11-21 19:04:13',
                'updated_at' => '2026-11-21 19:04:15',
            ),
            1 => 
            array (
                'id' => 2,
                'model_type' => 'App\\Models\\Board',
                'model_id' => 1,
                'uuid' => '427f2fbe-3d43-4b5c-a4af-b8588627acb3',
                'collection_name' => 'bod',
                'name' => 'eWP40hKm9quPx0LIXKKXm7yVtJ7N3Qpia0L3Cnot',
                'file_name' => 'PIC-05.png',
                'mime_type' => 'image/png',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 2010656,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"preview":true,"webp":true,"thumb":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2026-11-21 19:33:01',
                'updated_at' => '2026-11-21 19:33:03',
            ),
            2 => 
            array (
                'id' => 3,
                'model_type' => 'App\\Models\\Board',
                'model_id' => 2,
                'uuid' => 'cb423fa6-c40b-491a-9f5f-9496d0867ab8',
                'collection_name' => 'bod',
                'name' => 'fY6rmGYjlS5dAfp9hDP0MAt5NLiweaKoaehBiBlT',
                'file_name' => '09.png',
                'mime_type' => 'image/png',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 1812785,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"preview":true,"webp":true,"thumb":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2026-11-21 19:34:22',
                'updated_at' => '2026-11-21 19:34:23',
            ),
            3 => 
            array (
                'id' => 5,
                'model_type' => 'App\\Models\\Board',
                'model_id' => 4,
                'uuid' => 'c37ab328-1622-42d0-b324-31958072b580',
                'collection_name' => 'bod',
                'name' => 'XTK1Mr8iA1gtQkngiurjRKd5zo7mBZ7unwrOhzpZ',
                'file_name' => 'Pic-02.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 690667,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"preview":true,"webp":true,"thumb":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2026-11-21 19:43:05',
                'updated_at' => '2026-11-21 19:43:06',
            ),
            4 => 
            array (
                'id' => 6,
                'model_type' => 'App\\Models\\Sgm',
                'model_id' => 1,
                'uuid' => 'c81e1732-e366-4978-9af3-e6a726bff014',
                'collection_name' => 'sgms',
                'name' => 'CfySRQd277yinBHWz6Jup4WTfZK4brt498Jaj6xR',
                'file_name' => '12334.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 12429,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"preview":true,"webp":true,"thumb":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2026-11-21 20:05:24',
                'updated_at' => '2026-11-21 20:05:25',
            ),
            5 => 
            array (
                'id' => 7,
                'model_type' => 'App\\Models\\Sgm',
                'model_id' => 2,
                'uuid' => '02f44a1a-21e0-4d85-b420-5afe372360de',
                'collection_name' => 'sgms',
                'name' => 'Dp6lsdkW16Kswbw5XbYV8Fq8m0BHSo9Vgfr5Dhfo',
                'file_name' => '9704.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 3402,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"preview":true,"webp":true,"thumb":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2026-11-21 20:06:25',
                'updated_at' => '2026-11-21 20:06:26',
            ),
            6 => 
            array (
                'id' => 8,
                'model_type' => 'App\\Models\\Sgm',
                'model_id' => 3,
                'uuid' => 'c7cd8875-0980-4ea7-ae44-ca49d71de111',
                'collection_name' => 'sgms',
                'name' => 'GStv7MM15JLKJEJkZIyegicNIB1mKDHlbb1mngU4',
                'file_name' => '12456.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 12061,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"preview":true,"webp":true,"thumb":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2026-11-21 20:10:51',
                'updated_at' => '2026-11-21 20:10:51',
            ),
            7 => 
            array (
                'id' => 9,
                'model_type' => 'App\\Models\\Gm',
                'model_id' => 1,
                'uuid' => 'b62c7a33-bab8-440a-96bd-7b26d40e0f8b',
                'collection_name' => 'gms',
                'name' => '7eRFDDSPxu7zsLOtxgSASA1YWtnKOfmLiS5VH9Vn',
                'file_name' => '11807.jpg',
                'mime_type' => 'image/jpeg',
                'disk' => 'media',
                'conversions_disk' => 'media',
                'size' => 13584,
                'manipulations' => '[]',
                'custom_properties' => '[]',
                'generated_conversions' => '{"preview":true,"webp":true,"thumb":true}',
                'responsive_images' => '[]',
                'order_column' => 1,
                'created_at' => '2026-11-21 20:13:28',
                'updated_at' => '2026-11-21 20:13:29',
            ),
        ));
        
        
    }
}