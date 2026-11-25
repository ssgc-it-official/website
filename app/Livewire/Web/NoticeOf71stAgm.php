<?php

namespace App\Livewire\Web;

use App\Models\BlacklistedFirm;
use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class NoticeOf71stAgm extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Notice of the 71st Annual General Meeting';

        return view('livewire.web.notice-of-71st-agm', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
