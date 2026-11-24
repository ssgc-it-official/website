<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CustomerFacilitationCenters extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Customer Facilitation Centers';

        return view('livewire.web.customer-facilitation-centers')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
