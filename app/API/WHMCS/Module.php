<?php

namespace API\WHMCS;

class Module {

    private $whmcs;

    public function __construct(WHMCS $whmcs) {
        $this->whmcs = $whmcs;
    }
    
}