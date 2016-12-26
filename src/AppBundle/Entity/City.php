<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table("divisions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CityRepository")
 */
class City extends Division
{
    protected $city = true;

    public function setCity($city)
    {
        return $this;
    }
}