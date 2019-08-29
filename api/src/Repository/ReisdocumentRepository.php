<?php

namespace App\Repository;

use App\Entity\Reisdocument;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Reisdocument|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reisdocument|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reisdocument[]    findAll()
 * @method Reisdocument[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReisdocumentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Reisdocument::class);
    }

    // /**
    //  * @return Reisdocument[] Returns an array of Reisdocument objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reisdocument
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
