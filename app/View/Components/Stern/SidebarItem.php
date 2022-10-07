<?php

namespace App\View\Components\Stern;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class SidebarItem extends Component {

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        return view('stern.components.side-bar-item');
    }
}
