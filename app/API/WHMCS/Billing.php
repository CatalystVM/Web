<?php

namespace API\WHMCS;

class Billing {

    private $whmcs;

    public function __construct(WHMCS $whmcs) {
        $this->whmcs = $whmcs;
    }
    
    /**
     * 
     * https://developers.whmcs.com/api-reference/acceptquote/
     * 
     * @param int $quoteid
     * @param Array $parameters
     * @return bool
     */
    public function AcceptQuote($quoteid, $parameters = []) {
        $response = $this->whmcs->Post('AcceptQuote', array_merge([
            'quoteid' => $quoteid
        ], $parameters))->json();
        return $response['result'] == 'success';
    }

    /**
     * 
     * https://developers.whmcs.com/api-reference/addbillableitem/
     * 
     * @param int $quoteid
     * @param string $description
     * @param float $amount
     * @param string $unit
     * @param Array $parameters
     * @return bool
     */
    public function AddBillableItem($clientId, $description, $amount, $unit, $parameters = []) {
        $response = $this->whmcs->Post('AddBillableItem', array_merge([
            'clientid' => $clientId,
            'description' => $description,
            'amount' => $amount,
            'unit' => $unit
        ], $parameters))->json();
        return $response['result'] == 'success';
    }
}