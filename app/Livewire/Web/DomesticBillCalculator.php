<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class DomesticBillCalculator extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Domestic Bill Calculator';

        return view('livewire.web.domestic-bill-calculator', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
