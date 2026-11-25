<?php

namespace App\Livewire\Web;

use App\Models\BlacklistedFirm;
use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class BlacklistedFirms extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Blacklisted Firms';

        $firms = BlacklistedFirm::orderBy('created_at', 'DESC')->get();

        return view('livewire.web.blacklisted-firms', compact('title', 'firms'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
