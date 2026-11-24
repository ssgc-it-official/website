<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class PublicComplaintsResolution extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Public Complaints Resolution Mechanism';

        return view('livewire.web.public-complaints-resolution')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
