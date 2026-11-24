<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CapacityInfo extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'file_1',
        'file_2',
        'user_id',
    ];

}
