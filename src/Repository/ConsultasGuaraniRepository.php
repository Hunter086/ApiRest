<?php

namespace App\Repository;

use App\Entity\ConsultasGuarani;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ConsultasGuarani|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConsultasGuarani|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConsultasGuarani[]    findAll()
 * @method ConsultasGuarani[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConsultasGuaraniRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConsultasGuarani::class);
    }

    // /**
    //  * @return ConsultasGuarani[] Returns an array of ConsultasGuarani objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ConsultasGuarani
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
