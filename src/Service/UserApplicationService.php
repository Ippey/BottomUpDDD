<?php
/**
 * Created by PhpStorm.
 * User: ippei
 * Date: 2019-04-17
 * Time: 16:26
 */

namespace App\Service;


use App\Repository\UserRepositoryInterface;
use App\Service\Domain\UserService;
use App\Value\FullName;
use App\Value\UserName;

class UserApplicationService
{
    /** @var UserRepositoryInterface  */
    private $userRepository;
    /** @var UserService  */
    private $userService;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->userService = new UserService($userRepository);
    }

    /**
     * @param string $familyName
     * @param string $givenName
     * @param string $userName
     * @throws \Exception
     */
    public function createUser(string $familyName, string $givenName, string $userName)
    {
        $user = new \App\Value\User(
            new FullName($givenName, $familyName),
            new UserName($userName)
        );

        if ($this->userService->isDuplicate($user)) {
            throw new \Exception('重複しています。');
        }
        $this->userRepository->add($user);
    }
}
