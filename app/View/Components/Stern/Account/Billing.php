<?php

namespace App\View\Components\Stern\Account;

use Illuminate\View\Component;

class Billing extends Component {

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
        return view('stern.components.account.billing');
    }
}
