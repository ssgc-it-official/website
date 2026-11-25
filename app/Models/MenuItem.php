<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use LaravelIdea\Helper\App\Models\_IH_MenuItem_C;

class MenuItem extends Model
{
    protected $fillable = [
        'parent_id',
        'title',
        'url',
        'target',
        'icon',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
        'parent_id' => 'integer',
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(MenuItem::class, 'parent_id')->orderBy('order', 'asc');
    }

    public function activeChildren(): HasMany
    {
        return $this->hasMany(MenuItem::class, 'parent_id')
            ->where('is_active', true)
            ->orderBy('order', 'asc');
    }

    public static function tree(): array|Collection|_IH_MenuItem_C
    {
        return static::whereNull('parent_id')
            ->orderBy('order', 'asc')
            ->with('children.children')
            ->get();
    }

    public static function activeTree()
    {
        return static::whereNull('parent_id')
            ->where('is_active', true)
            ->orderBy('order', 'asc')
            ->with(['activeChildren' => function ($query) {
                $query->with('activeChildren');
            }])
            ->get();
    }
}
