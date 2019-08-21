<?php

namespace AppBundle\Repository;

use AppBundle\Entity\SubFamily;
use Doctrine\ORM\EntityRepository;

class SubFamilyRepository extends EntityRepository
{
    public function createAlphabeticalQueryBuilder()
    {
        return $this->createQueryBuilder('sub_family')
	        ->orderBy('sub_family.name', 'ASC');
    }
}
