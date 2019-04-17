<?php
/**
 * Created by PhpStorm.
 * User: ippei
 * Date: 2019-04-01
 * Time: 17:43
 */

namespace App\Value;


class User
{
    /** @var FullName */
    private $fullName;
    /** @var UserName */
    private $userName;

    public function __construct(FullName $fullName, UserName $userName)
    {
        $this->fullName = $fullName;
        $this->userName = $userName;
    }

    /**
     * @return FullName
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @return UserName
     */
    public function getUserName(): UserName
    {
        return $this->userName;
    }
}
