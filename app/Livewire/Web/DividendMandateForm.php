<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class DividendMandateForm extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Dividend Mandate Form';

        return view('livewire.web.dividend-mandate-form', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
