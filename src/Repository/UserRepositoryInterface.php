<?php
/**
 * Created by PhpStorm.
 * User: ippei
 * Date: 2019-04-17
 * Time: 16:23
 */

namespace App\Repository;


use App\Value\User;
use App\Value\UserName;

interface UserRepositoryInterface
{
    public function findByUserName(UserName $id);
    public function add(User $user);
}
