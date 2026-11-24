<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gms')->delete();
        
        \DB::table('gms')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Muhammad Faisal Khan',
                'designation' => 'Group Head General Manager',
                'department' => 'Legal & Estate Management',
                'photo' => 'media',
                'category_id' => 5,
                'user_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2026-11-21 20:13:28',
                'updated_at' => '2026-11-21 20:13:28',
            ),
        ));
        
        
    }
}