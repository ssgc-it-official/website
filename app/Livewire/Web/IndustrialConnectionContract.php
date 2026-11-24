<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class IndustrialConnectionContract extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Industrial Connection Contract';

        return view('livewire.web.industrial-connection-contract', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
