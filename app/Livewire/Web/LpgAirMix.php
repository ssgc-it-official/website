<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class LpgAirMix extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'LPG Air Mix';

        return view('livewire.web.lpg-air-mix', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
