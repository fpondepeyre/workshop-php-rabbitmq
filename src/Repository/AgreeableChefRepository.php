<?php

namespace App\Repository;

use App\Entity\AgreeableChef;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AgreeableChef|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgreeableChef|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgreeableChef[]    findAll()
 * @method AgreeableChef[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgreeableChefRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AgreeableChef::class);
    }

//    /**
//     * @return AgreeableChef[] Returns an array of AgreeableChef objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AgreeableChef
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
