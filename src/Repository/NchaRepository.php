<?php

namespace App\Repository;

use App\Entity\Ncha;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ncha|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ncha|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ncha[]    findAll()
 * @method Ncha[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NchaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ncha::class);
    }

//    /**
//     * @return Ncha[] Returns an array of Ncha objects
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
    public function findOneBySomeField($value): ?Ncha
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
