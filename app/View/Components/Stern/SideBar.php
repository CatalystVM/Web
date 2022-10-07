<?php

namespace App\View\Components\Stern;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Route;

class SideBar extends Component {

    private $items = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        $this->items = json_decode(file_get_contents(base_path('resources/json/sidebar.json')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        foreach ($this->items as $item)
            $this->CheckMenuItems($item);

        return view('stern.components.side-bar')->with('items', $this->items);
    }

    /**
     * Check the menu items state.
     *
     * @return void
     */
    private function CheckMenuItems($item) {
        //if (!isset($item->route_name)) return;

        $current = Route::currentRouteName();

        $breadcrubs_current = explode("::", $current);
        $breadcrubs_item = (!isset($item->route_name)) ? "" : explode("::", $item->route_name);

        for ($i = 0; $i < sizeof($breadcrubs_current); $i++) {
            try {
                $item->active = $breadcrubs_current[$i] == $breadcrubs_item[$i];
            } catch (\Exception $ex) {
                break;
            }
        }

        if (isset($item->submenu)) {
            foreach ($item->submenu as $item2)
                $this->CheckMenuItems($item2);
        } else {
            $item->submenu = false;
        }
    }
}
