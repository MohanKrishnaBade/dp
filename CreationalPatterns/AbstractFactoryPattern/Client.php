<?php

/*
 * Building portable applications requires a great level of dependencies encapsulation.
 * The abstract factory facilitates this by abstracting the creation of families of related or dependent objects.
 * Clients never create these platform objects directly, the factory does it for them, making it possible to interchange concrete implementations without changing the code that uses them, even at runtime.
 */
require_once 'BrokerDetails.php';
require_once 'PolicyDetails.php';

$obj = new BrokerDetails();
echo $obj->getDetails()->getAddress();

echo "<br>";

$obj1 = new PolicyDetails();
echo $obj1->getDetails()->getAddress();