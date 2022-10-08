<?php

namespace API\WHMCS;

class System {

    private $whmcs;

    public function __construct(WHMCS $whmcs) {
        $this->whmcs = $whmcs;
    }
    
}