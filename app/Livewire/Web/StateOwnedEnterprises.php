<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class StateOwnedEnterprises extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'The State Owned Enterprises (C-Level Appointments) Guidelines 2024';

        return view('livewire.web.state-owned-enterprises', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
