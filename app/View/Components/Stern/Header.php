<?php

namespace App\View\Components\Stern;

use Illuminate\View\Component;

class Header extends Component {

    public $title;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title = "") {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        return view('stern.components.header')->with('page_title', $this->title);
    }
}
