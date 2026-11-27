<?php

namespace App\Livewire\Web;

use App\Models\MediaCategory;
use App\Models\MediaPost;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.template-1')]
class MediaList extends Component
{
    use WithPagination;

    public MediaCategory $category;

    public function mount(string $categorySlug): void
    {
        $this->category = MediaCategory::where('slug', $categorySlug)
            ->where('status', 'active')
            ->firstOrFail();
    }

    public function render()
    {
        $posts = MediaPost::with('media')
            ->where('category_id', $this->category->id)
            ->where('is_active', true)
            ->orderByDesc('published_at')
            ->paginate(9);

        return view('livewire.web.media-list', compact('posts'));
    }
}
