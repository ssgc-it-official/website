<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class InvestorRelation extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Investor Relation';

        return view('livewire.web.investor-relation', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
