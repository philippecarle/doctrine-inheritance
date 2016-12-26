<?php

namespace AppBundle\EventListener\Doctrine;

use Doctrine\Common\Persistence\Event\LoadClassMetadataEventArgs;
use Doctrine\ORM\Mapping\ClassMetadataInfo;

class EntityDiscriminatorListener
{

    /**
     * @param LoadClassMetadataEventArgs $args
     */
    public function loadClassMetadata(LoadClassMetadataEventArgs $args)
    {

        /** @var ClassMetadataInfo $cMeta */
        $cMeta = $args->getClassMetadata();

        dump($cMeta);
    }
}
