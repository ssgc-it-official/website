<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ConversionOfPhysicalShares extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Conversion of Physical Shares of SSGCL into Book-Entry Form';

        return view('livewire.web.conversion-of-physical-shares', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
