<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class HowCustomersComplain extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'How Customers Can Complain';

        return view('livewire.web.how-customers-complain')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
