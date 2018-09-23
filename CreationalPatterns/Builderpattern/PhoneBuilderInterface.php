<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 8:07 PM
 */

interface PhoneBuilderInterface
{

    public function setColor(string $color): PhoneBuilder;

    public function setIsTouch(bool $is_touch): PhoneBuilder;

    public function getResult(): Phone;

}