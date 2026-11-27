<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class FlameMagazine extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['title', 'published_at', 'is_active','category_id'];

    protected $casts = [
        'published_at' => 'date',
        'is_active'    => 'boolean',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')->singleFile();
        $this->addMediaCollection('pdf')->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('cover')
            ->performOnCollections('cover')
            ->fit(Fit::Max, 900, 1300)
            ->withResponsiveImages()
            ->nonQueued();
    }
}
