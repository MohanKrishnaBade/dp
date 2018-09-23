<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 8:04 PM
 */

class Phone
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var bool
     */
    private $has_camera;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Phone
     */
    public function setColor(string $color): Phone
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @return bool
     */
    public function isHasCamera(): bool
    {
        return $this->has_camera;
    }

    /**
     * @param bool $has_camera
     * @return Phone
     */
    public function setHasCamera(bool $has_camera): Phone
    {
        $this->has_camera = $has_camera;
        return $this;
    }

}