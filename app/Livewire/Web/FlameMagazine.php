<?php

namespace App\Livewire\Web;

use App\Models\FlameMagazine as Magazine;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.template-1')]
class FlameMagazine extends Component
{
    public function render(): View
    {
        $issues = Magazine::with('media')
            ->where('is_active', true)
            ->orderByDesc('published_at')
            ->get();

        return view('livewire.web.flame-magazine', compact('issues'));
    }
}
