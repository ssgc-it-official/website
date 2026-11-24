<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class BusinessPolicy extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Business Principles and Ethics Policy';

        return view('livewire.web.business-policy')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
