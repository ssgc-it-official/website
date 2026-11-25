<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ContactForInvestmentAssistance extends Component
{

    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Contact for Investment Assistance / Grievances';

        return view('livewire.web.contact-for-investment-assistance', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
