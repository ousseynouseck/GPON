<?php

namespace App\Repository;

use App\Entity\TypeTirage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TypeTirage|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeTirage|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeTirage[]    findAll()
 * @method TypeTirage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeTirageRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, TypeTirage::class);
    }

//    /**
//     * @return TypeTirage[] Returns an array of TypeTirage objects
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
    public function findOneBySomeField($value): ?TypeTirage
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
