<?php
/**
 * Created by PhpStorm.
 * User: mohankrishnareddybade
 * Date: 9/22/18
 * Time: 7:52 PM
 */

require_once 'Details.php';
require_once 'Policy.php';

class PolicyDetails extends Details
{
    public function getDetails(): Policy
    {
        return new Policy();
    }
}