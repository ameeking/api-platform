<?php

namespace App\Repository;

use App\Entity\Whisky;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Whisky|null find($id, $lockMode = null, $lockVersion = null)
 * @method Whisky|null findOneBy(array $criteria, array $orderBy = null)
 * @method Whisky[]    findAll()
 * @method Whisky[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WhiskyRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Whisky::class);
    }

    // /**
    //  * @return Whisky[] Returns an array of Whisky objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Whisky
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
