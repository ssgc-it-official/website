<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class FormOfProxy71stAgm extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Form of Proxy (71st AGM)';

        return view('livewire.web.form-of-proxy-71st-agm', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
