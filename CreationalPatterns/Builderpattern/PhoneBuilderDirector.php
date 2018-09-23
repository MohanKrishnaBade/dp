<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 8:17 PM
 */
require_once 'PhoneBuilder.php';
require_once 'Phone.php';

class PhoneBuilderDirector
{
    /**
     * @var PhoneBuilder
     */
    private $builder;

    /**
     * PhoneBuilderDirector constructor.
     * @param PhoneBuilder $phoneBuilder
     */
    public function __construct(PhoneBuilder $phoneBuilder)
    {
        $this->builder = $phoneBuilder;
    }

    /**
     * @return $this
     */
    public function build(): self
    {
        $this->builder->setColor('red');
        $this->builder->setIsTouch(true);

        return $this;
    }

    /**
     * @return Phone
     */
    public function getResult(): Phone
    {
        return $this->builder->getResult();
    }

}