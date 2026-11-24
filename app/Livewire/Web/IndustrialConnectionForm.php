<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class IndustrialConnectionForm extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Industrial Connection Form';

        return view('livewire.web.industrial-connection-form', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
