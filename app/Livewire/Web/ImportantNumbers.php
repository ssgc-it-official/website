<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ImportantNumbers extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Important Numbers';

        return view('livewire.web.important-numbers')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
