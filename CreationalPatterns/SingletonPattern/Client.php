<?php
/*
 * The purpose of singleton pattern is to restrict instantiation of class to a single object.
 * It is implemented by creating a method within the class that creates a new instance of that class if one does not exist.
 * If an object instance already exists, the method simply returns a reference to an existing object.
 */

require_once 'Person.php';

echo \SingletonPattern\Person::getInstance()->getName();
echo \SingletonPattern\Person::getInstance()->getHeight();
