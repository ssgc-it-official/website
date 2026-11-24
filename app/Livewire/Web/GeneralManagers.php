<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use App\Models\Gm;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class GeneralManagers extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'General Managers';

        $gms = Gm::all();

        return view('livewire.web.general-managers', compact('title', 'gms'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
