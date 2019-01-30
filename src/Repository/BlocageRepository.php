<?php

namespace App\Repository;

use App\Entity\Blocage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Blocage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blocage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blocage[]    findAll()
 * @method Blocage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlocageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Blocage::class);
    }

//    /**
//     * @return Blocage[] Returns an array of Blocage objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Blocage
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
