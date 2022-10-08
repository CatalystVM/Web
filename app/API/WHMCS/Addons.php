<?php
namespace API\WHMCS;

class Addons {

    private WHMCS $whmcs;

    public function __construct(WHMCS $whmcs) {
        $this->whmcs = $whmcs;
    }
    
    /**
     * 
     * https://developers.whmcs.com/api-reference/updateclientaddon/
     * 
     * @param int $id
     * @param Array $parameters
     * @return bool
     */
    public function UpdateClientAddon($id, $parameters = []) : bool {
        $response = $this->whmcs->Post('UpdateClientAddon', array_merge([
            'id' => $id
        ], $parameters))->json();
        return $response['result'] == 'success' && $response['id'] == $id;
    }
}