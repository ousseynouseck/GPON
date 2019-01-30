<?php

namespace App\Repository;

use App\Entity\Nchd;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Nchd|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nchd|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nchd[]    findAll()
 * @method Nchd[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NchdRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Nchd::class);
    }

//    /**
//     * @return Nchd[] Returns an array of Nchd objects
//     */
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
    public function findOneBySomeField($value): ?Nchd
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
