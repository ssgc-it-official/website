<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FocalPersons extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'List of Focal Persons';

        return view('livewire.web.focal-persons', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
