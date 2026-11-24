<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ThreeQuotationTenders extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Three Quotation Tenders';

        $tenders = DB::connection('mysql_old')->table('qt_three_quotations')
            ->where('created_at', '>', now()->subDays(90))
            ->latest()
            ->get();

        return view('livewire.web.three-quotation-tenders', compact('tenders'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
