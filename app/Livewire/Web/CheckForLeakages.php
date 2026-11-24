<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CheckForLeakages extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Check Gas Line for Leakages';

        return view('livewire.web.check-for-leakages')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
