<?php

namespace App\Livewire\Web;

use App\Models\Gm;
use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ChairmanMdDmd extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Chairman, MD, and DMD';


        return view('livewire.web.chairman-md-dmd', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
