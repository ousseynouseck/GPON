<?php

namespace App\Repository;

use App\Entity\TypeCable;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TypeCable|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeCable|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeCable[]    findAll()
 * @method TypeCable[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeCableRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TypeCable::class);
    }

//    /**
//     * @return TypeCable[] Returns an array of TypeCable objects
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
    public function findOneBySomeField($value): ?TypeCable
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
