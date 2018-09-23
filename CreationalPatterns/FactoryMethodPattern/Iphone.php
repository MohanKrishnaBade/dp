<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 8:31 PM
 */
require_once 'Product.php';

class Iphone implements Product
{
    /**
     * @return string
     */
    public function getType(): string
    {
        return 'Iphone';
    }
}