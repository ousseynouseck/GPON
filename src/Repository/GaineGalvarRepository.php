<?php

namespace App\Repository;

use App\Entity\GaineGalvar;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GaineGalvar|null find($id, $lockMode = null, $lockVersion = null)
 * @method GaineGalvar|null findOneBy(array $criteria, array $orderBy = null)
 * @method GaineGalvar[]    findAll()
 * @method GaineGalvar[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GaineGalvarRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GaineGalvar::class);
    }

//    /**
//     * @return GaineGalvar[] Returns an array of GaineGalvar objects
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
    public function findOneBySomeField($value): ?GaineGalvar
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
