<?php

namespace App\Livewire\Web;

use App\Models\BlacklistedFirm;
use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class AnnualProcurementPlan202627 extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Blacklisted Firms';

        return view('livewire.web.annual-procurement-plan-2026-27', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
