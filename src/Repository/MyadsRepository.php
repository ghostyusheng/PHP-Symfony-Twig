<?php

namespace App\Repository;

use App\Entity\Myads;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Myads>
 *
 * @method Myads|null find($id, $lockMode = null, $lockVersion = null)
 * @method Myads|null findOneBy(array $criteria, array $orderBy = null)
 * @method Myads[]    findAll()
 * @method Myads[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MyadsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Myads::class);
    }

    //    /**
    //     * @return Myads[] Returns an array of Myads objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('m.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Myads
    //    {
    //        return $this->createQueryBuilder('m')
    //            ->andWhere('m.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
