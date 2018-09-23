<?php
/*
 * The factory method pattern deals with the problem of creating objects without having to specify the exact class of the object that will be created.
 */
require_once 'AppleFactory.php';

$factory =  new AppleFactory();
echo $factory->makeProduct()->getType();
