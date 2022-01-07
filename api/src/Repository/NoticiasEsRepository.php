<?php

namespace App\Repository;

use App\Entity\NoticiasEs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NoticiasEs|null find($id, $lockMode = null, $lockVersion = null)
 * @method NoticiasEs|null findOneBy(array $criteria, array $orderBy = null)
 * @method NoticiasEs[]    findAll()
 * @method NoticiasEs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoticiasEsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NoticiasEs::class);
    }

    // /**
    //  * @return NoticiasEs[] Returns an array of NoticiasEs objects
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
    public function findOneBySomeField($value): ?NoticiasEs
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
