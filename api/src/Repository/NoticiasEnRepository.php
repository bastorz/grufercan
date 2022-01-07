<?php

namespace App\Repository;

use App\Entity\NoticiasEn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NoticiasEn|null find($id, $lockMode = null, $lockVersion = null)
 * @method NoticiasEn|null findOneBy(array $criteria, array $orderBy = null)
 * @method NoticiasEn[]    findAll()
 * @method NoticiasEn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoticiasEnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NoticiasEn::class);
    }

    // /**
    //  * @return NoticiasEn[] Returns an array of NoticiasEn objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NoticiasEn
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
