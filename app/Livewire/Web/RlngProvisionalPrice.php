<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class RlngProvisionalPrice extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'RLNG Provisional Price';

        return view('livewire.web.rlng-provisional-price', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
