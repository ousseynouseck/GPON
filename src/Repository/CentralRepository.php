<?php

namespace App\Repository;

use App\Entity\Central;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Central|null find($id, $lockMode = null, $lockVersion = null)
 * @method Central|null findOneBy(array $criteria, array $orderBy = null)
 * @method Central[]    findAll()
 * @method Central[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CentralRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Central::class);
    }

//    /**
//     * @return Central[] Returns an array of Central objects
//     */
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
    public function findOneBySomeField($value): ?Central
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
