<?php

namespace App\Livewire\Web;

use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ConsentForElectronicTransmission extends Component
{
    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Consent for Electronic Transmission of Annual Audited Financial Statements';

        return view('livewire.web.consent-for-electronic-transmission', compact('title'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
