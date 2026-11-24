<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CommercialConnectionContract extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Commercial Connection Contract';

        return view('livewire.web.commercial-connection-contract', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
