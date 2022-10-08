<?php

namespace API\WHMCS;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class WHMCS {

    protected $credentials;
    
    public function __construct() {
        $this->credentials = [
            'url' => config('api.whmcs.url'),
            'identifier' => config('api.whmcs.identifier'),
            'secret' => config('api.whmcs.secret')
        ];
    }

    /**
     * @param string $action
     * @param Array $options
     * @return \Illuminate\Http\Client\Response
     */
    public function Post($action, $options = []) : Response {
        $head = ['action' => $action, 'responsetype' => 'json'];
        $head = array_merge($head, $this->credentials, $options);
        return Http::post(config('api.whmcs.url'), $head);
    }

    /**
     * @return \API\WHMCS\Addons
     */
    public function Addons() : Addons {
        static $addons = new Addons($this);
        return $addons;
    }

    /**
     * @return \API\WHMCS\Billing
     */
    public function Billing() : Billing {
        static $billing = new Billing($this);
        return $billing;
    }

    /**
     * @return \API\WHMCS\Domains
     */
    public function Domains() : Domains {
        static $domains = new Domains($this);
        return $domains;
    }

    /**
     * @return \API\WHMCS\Module
     */
    public function Module() : Module {
        static $module = new Module($this);
        return $module;
    }

    /**
     * @return \API\WHMCS\Orders
     */
    public function Orders() : Orders {
        static $orders = new Orders($this);
        return $orders;
    }

    /**
     * @return \API\WHMCS\Servers
     */
    public function Servers() : Servers {
        static $servers = new Servers($this);
        return $servers;
    }

    /**
     * @return \API\WHMCS\Service
     */
    public function Service() : Service {
        static $service = new Service($this);
        return $service;
    }

    /**
     * @return \API\WHMCS\Support
     */
    public function Support() : Support {
        static $support = new Support($this);
        return $support;
    }

    /**
     * @return \API\WHMCS\System
     */
    public function System() : System {
        static $system = new System($this);
        return $system;
    }

    /**
     * @return \API\WHMCS\Tickets
     */
    public function Tickets() : Tickets {
        static $tickets = new Tickets($this);
        return $tickets;
    }

    /**
     * @return \API\WHMCS\Users
     */
    public function Users() : Users {
        static $users = new Users($this);
        return $users;
    }

}