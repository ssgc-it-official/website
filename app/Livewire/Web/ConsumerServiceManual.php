<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ConsumerServiceManual extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Natural Gas Consumer Service Manual';

        return view('livewire.web.consumer-service-manual', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
