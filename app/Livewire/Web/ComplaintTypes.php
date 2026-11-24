<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ComplaintTypes extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Complaint Types and Estimated Resolution Timelines';

        return view('livewire.web.complaint-types')
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
