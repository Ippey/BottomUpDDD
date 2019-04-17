<?php
/**
 * Created by PhpStorm.
 * User: ippei
 * Date: 2019-04-17
 * Time: 16:09
 */

namespace App\Service\Domain;


use App\Repository\UserRepositoryInterface;
use App\Value\User;

class UserService
{
    /** @var UserRepositoryInterface  */
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function isDuplicate(User $user)
    {
        $row = $this->userRepository->findByUserName($user->getUserName());
        if (empty($row)) {
            return true;
        }
        return false;
    }
}
