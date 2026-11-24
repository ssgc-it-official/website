<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class TenYears extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Ten Years at a Glance';

        return view('livewire.web.ten-years', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
