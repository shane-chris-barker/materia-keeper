<?php

namespace App\Repository;

use App\Entity\Abilities;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Abilities|null find($id, $lockMode = null, $lockVersion = null)
 * @method Abilities|null findOneBy(array $criteria, array $orderBy = null)
 * @method Abilities[]    findAll()
 * @method Abilities[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbilitiesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Abilities::class);
    }

    // /**
    //  * @return Abilities[] Returns an array of Abilities objects
    //  */
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
    public function findOneBySomeField($value): ?Abilities
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
