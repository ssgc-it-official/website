<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Tenders extends Component
{
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Active Tenders';

        $docCounts = DB::connection('mysql_old')->table('tbl_purchase_documents')
            ->select('purchase_id', DB::raw('COUNT(*) as documents_count'))
            ->groupBy('purchase_id');

        $tenders = DB::connection('mysql_old')->table('tbl_purchase as A')
            ->joinSub($docCounts, 'B', function ($join) {
                $join->on('B.purchase_id', '=', 'A.id');
            })
            ->select('A.*', 'B.documents_count')
            ->where('A.status', '1')
            ->whereNull('A.deleted_at')
            ->whereDate('A.bid_date', '>=', now()->subDays(9))
            ->orderByDesc('A.bid_date')
            ->get();

        return view('livewire.web.tenders', compact('tenders'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
