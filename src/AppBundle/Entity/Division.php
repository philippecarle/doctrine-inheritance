<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Division
 *
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\Table(name="divisions")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DivisionRepository")
 * @ORM\DiscriminatorColumn(name="city", type="integer")
 * @ORM\DiscriminatorMap({
 *     0 = "Division",
 *     1 = "City"
 * })
 */
class Division
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;


    public function __construct(string $name)
    {
        $this->name = $name;
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Division
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

