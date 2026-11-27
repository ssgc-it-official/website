<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class MediaPost extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'category_id', 'title', 'slug', 'excerpt', 'body',
        'external_url', 'published_at', 'is_active',
    ];

    protected $casts = ['published_at' => 'date', 'is_active' => 'boolean'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(MediaCategory::class, 'category_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')->singleFile();
        $this->addMediaCollection('pdf')->singleFile();
        $this->addMediaCollection('gallery');            // many files allowed
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('card')
            ->performOnCollections('cover', 'gallery')
            ->fit(Fit::Max, 900, 1300)
            ->withResponsiveImages()
            ->nonQueued();
    }

    /** Listing image: the cover, or the first gallery image (for Advertisements). */
    public function thumbnail(): ?Media
    {
        return $this->getFirstMedia('cover') ?? $this->getFirstMedia('gallery');
    }
}
