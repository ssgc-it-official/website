<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ScrutinizerReport2025 extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Scrutinizer Report 2025';

        return view('livewire.web.scrutinizer-report-2025', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
