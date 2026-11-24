<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class StatementOfCorporateIntent extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Statement of Corporate Intent';

        return view('livewire.web.statement-of-corporate-intent', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
