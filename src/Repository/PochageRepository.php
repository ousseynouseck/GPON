<?php

namespace App\Repository;

use App\Entity\Pochage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pochage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pochage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pochage[]    findAll()
 * @method Pochage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PochageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pochage::class);
    }

//    /**
//     * @return Pochage[] Returns an array of Pochage objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pochage
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
