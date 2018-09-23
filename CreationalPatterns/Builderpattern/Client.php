<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 8:20 PM
 */

/*
 * The builder pattern separates the construction of a complex object from its representation, making it possible for the same construction process to create different representations.
 * While some creational patterns construct a product in one call, builder pattern does it step by step under the control of the director.
 */
require_once 'PhoneBuilder.php';
require_once 'PhoneBuilderDirector.php';

$phoneBuilder = new PhoneBuilder();
$builderDirector = new PhoneBuilderDirector($phoneBuilder);
var_dump($builderDirector->build()->getResult());