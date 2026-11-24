<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use App\Models\Sgm;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class SeniorGeneralManagers extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Senior General Managers';

        $sgms = Sgm::all();

        return view('livewire.web.senior-general-managers', compact('title', 'sgms'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
