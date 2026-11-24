<?php

namespace Database\Seeders;

use App\Models\ManagementCategory;
use Illuminate\Database\Seeder;

class ManagementCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ManagementCategory::create(['name' => 'Group Head Senior General Manager', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Senior General Manager', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Group Head Acting Senior General Manager', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Acting Senior General Manager', 'user_id' => 1]);

        ManagementCategory::create(['name' => 'Group Head General Manager', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'General Manager', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Group Head Acting General Manager', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Acting General Manager', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'General Manager Incharge', 'user_id' => 1]);

        ManagementCategory::create(['name' => 'Deputy General Manager', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Deputy General Manager Incharge', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Acting Deputy General Manager', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Chief Financial Officer', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Acting Chief Financial Officer', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Chief Engineer', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Acting Chief Engineer', 'user_id' => 1]);
        ManagementCategory::create(['name' => 'Principal Staff Officer', 'user_id' => 1]);
    }
}
