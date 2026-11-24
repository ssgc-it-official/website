<?php

namespace App\Livewire\Web;

use App\Models\Board;
use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class DirectorProfile extends Component
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

        $title = 'Board of Directors';

        $director = Board::find($this->id);

        return view('livewire.web.director-profile', compact('director'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
