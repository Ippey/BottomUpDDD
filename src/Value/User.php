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
    /** @var UserId */
    private $userId;
    /** @var FullName */
    private $fullName;

    public function __construct(UserId $userId, FullName $fullName)
    {
        $this->userId = $userId;
        $this->fullName = $fullName;
    }

    public function eqaulsTo(User $other)
    {
        return $this->userId->equalsTo($other->userId) && $this->fullName->equalsTo($other->fullName);
    }

    /**
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return FullName
     */
    public function getFullName()
    {
        return $this->fullName;
    }
}