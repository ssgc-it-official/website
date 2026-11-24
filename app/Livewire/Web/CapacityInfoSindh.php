<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CapacityInfoSindh extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Capacity Information -  Sindh';

        return view('livewire.web.capacity-info-sindh', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }

}
