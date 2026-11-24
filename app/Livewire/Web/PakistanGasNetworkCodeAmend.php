<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class PakistanGasNetworkCodeAmend extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Pakistan Gas Network Code - Amendment';

        return view('livewire.web.pakistan-gas-network-code-amend', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }

}
