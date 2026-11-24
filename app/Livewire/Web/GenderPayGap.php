<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class GenderPayGap extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Gender Pay Gap';

        return view('livewire.web.gender-pay-gap')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
