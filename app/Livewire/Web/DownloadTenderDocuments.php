<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class DownloadTenderDocuments extends Component
{
    public $id;

    /**
     * @param int|string $id
     */
    public function mount(int|string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Download Tender Documents';

        $documents = DB::connection('mysql_old')
            ->table('tbl_purchase_documents')
            ->where('purchase_id', $this->id)
            ->get();

        return view('livewire.web.download-tender-documents', compact('documents'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
