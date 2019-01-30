<?php

namespace App\Repository;

use App\Entity\TypeBoite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TypeBoite|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeBoite|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeBoite[]    findAll()
 * @method TypeBoite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeBoiteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TypeBoite::class);
    }

//    /**
//     * @return TypeBoite[] Returns an array of TypeBoite objects
//     */
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
    public function findOneBySomeField($value): ?TypeBoite
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
