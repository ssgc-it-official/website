<?php

namespace App\Livewire\Web;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Models\MenuItem;

class Profile extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Profile';

        return view('livewire.web.profile')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
