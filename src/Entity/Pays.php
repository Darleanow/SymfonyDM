<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity
 */
class Pays
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="continent", type="string", length=50, nullable=true)
     */
    private $continent;

    /**
     * @var int|null
     *
     * @ORM\Column(name="population", type="integer", nullable=true)
     */
    private $population;

    /**
     * @var string|null
     *
     * @ORM\Column(name="capitale", type="string", length=50, nullable=true)
     */
    private $capitale;


}
