<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 8:10 PM
 */

require_once 'PhoneBuilderInterface.php';
require_once 'Phone.php';

class PhoneBuilder implements PhoneBuilderInterface
{
    private $phone;

    public function __construct()
    {
        $this->phone = new Phone();
    }


    public function setColor(string $color): PhoneBuilder
    {
        $this->phone->setColor($color);
        return $this;
    }

    public function setIsTouch(bool $is_touch): PhoneBuilder
    {
        $this->phone->setHasCamera($is_touch);
        return $this;
    }

    public function getResult(): Phone
    {
        return $this->phone;
    }
}