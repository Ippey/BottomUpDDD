<?php
/**
 * Created by PhpStorm.
 * User: ippei
 * Date: 2019-04-01
 * Time: 17:43
 */

namespace App\Value;


class UserId
{
    private $userId;

    /**
     * UserId constructor.
     * @param int $userId
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function __toString()
    {
        return (string)$this->userId;
    }

    public function equalsTo(UserId $other)
    {
        return $this->userId == $other->userId;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }
}