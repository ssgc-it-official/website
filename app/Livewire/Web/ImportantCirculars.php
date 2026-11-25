<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ImportantCirculars extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Important Circulars / Notifications';

        return view('livewire.web.important-circulars', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
