<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class DraftMinutes71stAgm extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Draft Minutes of the 71st Annual General Meeting';

        return view('livewire.web.draft-minutes--71st-agm', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
