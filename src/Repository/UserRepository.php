<?php

namespace App\Repository;

use App\Entity\User;
use App\Value\UserName;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository implements UserRepositoryInterface
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * @param UserName $userName
     * @return User|null
     */
    public function findByUserName(UserName $userName)
    {
        return $this->findOneBy([
            'userName' => $userName
        ]);
    }

    /**
     * @param \App\Value\User $user
     * @throws \Doctrine\ORM\ORMException
     */
    public function add(\App\Value\User $user)
    {
        $userEntity = new User();
        $userEntity->setFamilyName($user->getFullName()->getFamilyName());
        $userEntity->setGivenName($user->getFullName()->getGivenName());
        $userEntity->setUserName($user->getUserName());
        $this->getEntityManager()->persist($userEntity);
    }
}
