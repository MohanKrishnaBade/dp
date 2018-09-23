<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 7:31 PM
 */

require_once 'Address.php';

class Broker implements Address
{
    /**
     * @var string
     */
    private $address;

    /**
     * Broker constructor.
     */
    public function __construct()
    {
        $this->setAddress();

    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return Void
     */
    public function setAddress(): Void
    {
        $this->address = "Broker address set by likki";
    }

}