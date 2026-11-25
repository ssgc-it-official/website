<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ScrutinizerReportForAgm2022 extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Scrutinizer Report for AGM 2022 held on 29 December 2023';

        return view('livewire.web.scrutinizer-report-for-agm-2022', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
