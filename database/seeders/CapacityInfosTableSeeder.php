<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CapacityInfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('capacity_infos')->delete();
        
        \DB::table('capacity_infos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'file_1' => '2026_11_cap_info_dist_balochistan.pdf',
                'file_2' => '2026_11_cap_info_dist_balochistan_segment_wise.pdf',
                'user_id' => 1,
                'created_at' => '2025-04-10 00:59:09',
                'updated_at' => '2026-11-21 22:22:56',
            ),
            1 => 
            array (
                'id' => 2,
                'file_1' => '2026_11_cap_info_dist_khi.pdf',
                'file_2' => '2026_11_cap_info_dist_khi_segment_wise.pdf',
                'user_id' => 1,
                'created_at' => '2025-04-10 00:59:09',
                'updated_at' => '2026-11-21 22:25:58',
            ),
            2 => 
            array (
                'id' => 3,
                'file_1' => '2026_10_cap_info_dist_sindh.pdf',
                'file_2' => '2026_10_cap_info_dist_sindh_segment_wise.pdf',
                'user_id' => 1,
                'created_at' => '2025-04-10 00:59:09',
                'updated_at' => '2026-10-05 14:28:17',
            ),
            3 => 
            array (
                'id' => 4,
                'file_1' => '2026_10_cap_info_dist_trans.pdf',
                'file_2' => '2026_10_cap_info_dist_trans_segment_wise.pdf',
                'user_id' => 1,
                'created_at' => '2025-04-10 00:59:09',
                'updated_at' => '2026-10-05 14:40:11',
            ),
        ));
        
        
    }
}