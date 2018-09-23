<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 7:49 PM
 */

require_once 'Address.php';

class Policy implements Address
{
    /**
     * @var string
     */
    private $address;

    /**
     * Policy constructor.
     */
    public function __construct()
    {
        $this->setAddress();
    }

    /**
     *
     */
    public function setAddress(): void
    {
        $this->address = 'Policy Address set by mohan';
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;

    }

}