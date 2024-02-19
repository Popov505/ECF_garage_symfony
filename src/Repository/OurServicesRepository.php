<?php

namespace App\Repository;

use App\Entity\OurServices;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OurServices>
 *
 * @method OurServices|null find($id, $lockMode = null, $lockVersion = null)
 * @method OurServices|null findOneBy(array $criteria, array $orderBy = null)
 * @method OurServices[]    findAll()
 * @method OurServices[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OurServicesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OurServices::class);
    }

//    /**
//     * @return OurServices[] Returns an array of OurServices objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OurServices
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
