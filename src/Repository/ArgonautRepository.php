<?php

namespace App\Repository;

use App\Entity\Argonaut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Argonaut|null find($id, $lockMode = null, $lockVersion = null)
 * @method Argonaut|null findOneBy(array $criteria, array $orderBy = null)
 * @method Argonaut[]    findAll()
 * @method Argonaut[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArgonautRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Argonaut::class);
    }

    // /**
    //  * @return Argonaut[] Returns an array of Argonaut objects
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
    public function findOneBySomeField($value): ?Argonaut
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
