<?php

namespace Database\Seeders;

use App\Models\MediaCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class MediaCategorySeeder extends Seeder
{
    protected $fillable = ['name', 'status'];
    public function run(): void
    {
        $categories = [
            'Flame Magazine',
            'Advertisements',
            'Social Media',
            'Press Releases',
            'Events',
            'News',
            'Operation Grift Updates',
        ];

        foreach ($categories as $name) {
            MediaCategory::updateOrCreate(
                ['name' => $name],
                ['slug' => Str::slug($name), 'status' => 'active']
            );
        }
    }
}
