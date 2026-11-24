<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProcessOfGasConnection extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Process of Gas Connection (Domestic/ Commercial/ Industrial)';

        return view('livewire.web.process-of-gas-connection', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
