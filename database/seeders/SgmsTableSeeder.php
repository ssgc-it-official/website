<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SgmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sgms')->delete();
        
        \DB::table('sgms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ali Asghar Shah',
                'designation' => 'Group Head Senior General Manager',
                'department' => 'HR & MS',
                'photo' => 'media',
                'category_id' => 1,
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2026-11-21 20:05:24',
                'updated_at' => '2026-11-21 20:05:24',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Jamil Ur Rehman',
                'designation' => 'Group Head Senior General Manager',
                'department' => 'Information Technology',
                'photo' => 'media',
                'category_id' => 1,
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2026-11-21 20:06:25',
                'updated_at' => '2026-11-21 20:06:25',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Adil Aziz Khan',
                'designation' => 'Senior General Manager',
                'department' => 'UFG',
                'photo' => 'media',
                'category_id' => 2,
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2026-11-21 20:10:51',
                'updated_at' => '2026-11-21 20:10:51',
            ),
        ));
        
        
    }
}