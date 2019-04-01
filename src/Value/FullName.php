<?php
/**
 * Created by PhpStorm.
 * User: ippei
 * Date: 2019-04-01
 * Time: 17:36
 */

namespace App\Value;


class FullName
{
    private $familyName;
    private $givenName;

    public function __construct($givenName, $familyName)
    {
        $this->givenName = $givenName;
        $this->familyName = $familyName;
    }

    public function __toString()
    {
        return $this->givenName . ' ' . $this->familyName;
    }

    public function equalsTo(FullName $other)
    {
        return $this->givenName == $other->givenName && $this->familyName == $other->familyName;
    }

    /**
     * @return mixed
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * @return mixed
     */
    public function getGivenName()
    {
        return $this->givenName;
    }
}