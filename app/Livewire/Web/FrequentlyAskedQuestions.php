<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FrequentlyAskedQuestions extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Frequently Asked Questions';

        return view('livewire.web.frequently-asked-questions', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
