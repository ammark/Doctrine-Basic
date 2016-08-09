<?php
/**
 * Created by PhpStorm.
 * User: ammarkalim
 * Date: 2016-08-08
 * Time: 6:03 PM
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    /**
     * It will return an array of Genus objects
     * @return Genus []
     */
    public function findAllPublishedOrderedBySize()
    {
        // 'genus' part is the table alias
        return $this->createQueryBuilder('genus')
            ->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
            ->orderBy('genus.speciesCount', 'DESC')
            ->getQuery()
            ->execute(); // returns an array of results
            // ->getOneOrNullResult() - returns one result (or null)
    }
}
