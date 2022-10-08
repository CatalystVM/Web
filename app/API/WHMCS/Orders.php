<?php

namespace API\WHMCS;

class Orders {

    private $whmcs;

    public function __construct(WHMCS $whmcs) {
        $this->whmcs = $whmcs;
    }
    
}