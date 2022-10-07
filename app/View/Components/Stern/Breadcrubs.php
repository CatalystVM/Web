<?php

namespace App\View\Components\Stern;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class Breadcrubs extends Component {

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        $current = Route::currentRouteName();
        $breadcrubs_current = explode("::", $current);
        if ($breadcrubs_current[0] == 'cloud')
            unset($breadcrubs_current[0]);

        for ($i = 0; $i < sizeof($breadcrubs_current); $i++)
            $breadcrubs_current[$i] = Str::replace(".", " ", $breadcrubs_current[$i]);

        return view('stern.components.breadcrubs')->with('breadcrubs', $breadcrubs_current);
    }
}
