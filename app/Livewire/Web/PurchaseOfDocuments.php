<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class PurchaseOfDocuments extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Purchase Of Documents';

        return view('livewire.web.purchase-of-documents')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
