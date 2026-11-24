<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class LicenseForTransmission extends Component
{

    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'License for Transmission, Distribution, and Sale of Natural Gas';

        return view('livewire.web.license-for-transmission', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
