<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class SecpCompliance extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'SECP Compliance Certificate';

        return view('livewire.web.secp-compliance', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
