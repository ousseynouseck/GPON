<?php

namespace App\Repository;

use App\Entity\GaineGrise;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GaineGrise|null find($id, $lockMode = null, $lockVersion = null)
 * @method GaineGrise|null findOneBy(array $criteria, array $orderBy = null)
 * @method GaineGrise[]    findAll()
 * @method GaineGrise[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GaineGriseRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GaineGrise::class);
    }

//    /**
//     * @return GaineGrise[] Returns an array of GaineGrise objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GaineGrise
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
