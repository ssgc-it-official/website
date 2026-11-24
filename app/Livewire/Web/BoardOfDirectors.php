<?php

namespace App\Livewire\Web;

use App\Models\Board;
use App\Models\MenuItem;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class BoardOfDirectors extends Component
{

    /**
     * @return Factory|View
     */
    public function render(): Factory|View
    {
        $navItems = MenuItem::activeTree();

        $title = 'Board of Directors';

        $directors = Board::all();

        return view('livewire.web.board-of-directors', compact('title', 'directors'))
            ->layout('layouts.template-1', compact('navItems', 'title'));
    }
}
