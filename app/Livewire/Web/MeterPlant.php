<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class MeterPlant extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Meter Manufacturing Plant';

        return view('livewire.web.meter-plant')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
