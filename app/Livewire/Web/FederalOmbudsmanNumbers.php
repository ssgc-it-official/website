<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FederalOmbudsmanNumbers extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Federal Ombudsman Numbers';

        return view('livewire.web.federal-ombudsman-numbers')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
