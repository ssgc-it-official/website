<?php

namespace App\Livewire\Web;

use App\Models\MediaPost;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.template-1')]
class MediaDetail extends Component
{
    public MediaPost $post;

    public function mount(string $categorySlug, string $postSlug): void
    {
        $this->post = MediaPost::with(['media', 'category'])
            ->where('slug', $postSlug)
            ->where('is_active', true)
            ->whereHas('category', fn($q) => $q->where('slug', $categorySlug))
            ->firstOrFail();
    }

    public function render()
    {
        return view('livewire.web.media-detail');
    }
}
