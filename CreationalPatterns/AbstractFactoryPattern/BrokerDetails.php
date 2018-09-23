<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 7:46 PM
 */
require_once 'Details.php';
require_once 'Broker.php';

class BrokerDetails extends Details
{

    public function getDetails(): Broker
    {
        return new Broker();
    }
}