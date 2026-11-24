<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class HseHandbook extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'HSE Integrated Management System Handbook';

        return view('livewire.web.hse-handbook', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
