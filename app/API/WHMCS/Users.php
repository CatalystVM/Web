<?php

namespace API\WHMCS;

class Users {

    private $whmcs;

    public function __construct(WHMCS $whmcs) {
        $this->whmcs = $whmcs;
    }
    
}