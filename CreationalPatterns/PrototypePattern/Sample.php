<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 8:56 PM
 */

class User
{
    public $name;
    public $email;
}

class Employee extends User
{
    public function __construct()
    {
        $this->name = 'mohan';
        $this->email = 'mohanbade.php@google.com';
    }

    public function info()
    {
        return sprintf('%s, %s', $this->name, $this->email);
    }

    public function __clone()
    {
        /* additional changes for (after)clone behavior? */
    }
}

$employee = new Employee();
echo $employee->info();
$director = clone $employee;
$director->name = 'mohan bade';
$director->email = 'mbade@google.com';
echo $director->info(); //outputs: Jane Doe, jane.doe@fake.mail