<?php

namespace App\Livewire\Web;

use App\Models\FinancialReport;
use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FinancialReports extends Component
{

    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $reportsByYear = FinancialReport::query()
            ->orderByDesc('year')
            ->orderBy('sort_order')
            ->orderBy('id')
            ->get()
            ->groupBy('year')
            ->map(fn ($items) => $items->groupBy('period_title'));

        $navItems = MenuItem::activeTree();

        $title = 'Financial Reports';

        return view('livewire.web.financial-reports', compact('title', 'reportsByYear'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
