<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class WhistleBlowingMechanism extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Whistle Blowing Mechanism';

        return view('livewire.web.whistle-blowing-mechanism')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
