<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 8:32 PM
 */
require_once 'ProductFactory.php';
require_once 'Iphone.php';

class AppleFactory implements ProductFactory
{
    /**
     * @return Iphone
     */
    public function makeProduct(): Iphone
    {
        return new Iphone();
    }

}