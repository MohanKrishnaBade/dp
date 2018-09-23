<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 8:45 PM
 */

namespace SingletonPattern;


class Person
{
    /**
     * @var self
     */
    private static $instance;

    /**
     * @return Person
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {

            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return 'hey!!  this is Mohan..';
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return '5.7';
    }

}