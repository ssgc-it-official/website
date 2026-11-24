<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class HsePolicy extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Health, Safety, Environment, and Quality Assurance Policy';

        return view('livewire.web.hse-policy')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
