<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class DocumentSection extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = ['name', 'slug','heading','sub_heading','title'];

    // One PDF per section, stored in the `media` table.
    // Uploading a new PDF replaces the old one.
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('pdf')
            ->singleFile()
            ->acceptsMimeTypes(['application/pdf']);
    }

    // $section->pdf  => Media model or null
    public function getPdfAttribute()
    {
        return $this->getFirstMedia('pdf');
    }
}
