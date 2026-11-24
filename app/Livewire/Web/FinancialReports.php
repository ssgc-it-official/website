<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FinancialReports extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Financial Reports';

        return view('livewire.web.financial-reports', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
