<?php

namespace App\Repository;

use App\Entity\TruckZhazgul;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TruckZhazgul|null find($id, $lockMode = null, $lockVersion = null)
 * @method TruckZhazgul|null findOneBy(array $criteria, array $orderBy = null)
 * @method TruckZhazgul[]    findAll()
 * @method TruckZhazgul[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TruckZhazgulRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TruckZhazgul::class);
    }

    // /**
    //  * @return TruckZhazgul[] Returns an array of TruckZhazgul objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TruckZhazgul
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
