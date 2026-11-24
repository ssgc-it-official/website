<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class DomesticConnectionForm extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Domestic Connection Form';

        return view('livewire.web.domestic-connection-form', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
