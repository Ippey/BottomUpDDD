<?php
/**
 * Created by PhpStorm.
 * User: ippei
 * Date: 2019-04-17
 * Time: 16:37
 */

namespace App\Value;


class UserName
{
    private $userName;

    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    public function __toString()
    {
        return $this->userName;
    }
}
