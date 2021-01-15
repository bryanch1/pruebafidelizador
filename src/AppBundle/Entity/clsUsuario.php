<?php
/**
 * Clase utiliza php >=5.6
 * Class Usuario
 * @package AppBundle\Entity
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuario")
 */
class Usuario
{

    /**
     * @ORM\Column(type="integer", length=11)
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $ID;
    /**
     * @ORM\Column(type="string", length=500)
     */
    public $login;
    /**
     * @ORM\Column(type="string", length=500)
     */
    public $password;
    /**
     * @ORM\Column(type="string", length=50)
     */
    public $estado_vigente;
}