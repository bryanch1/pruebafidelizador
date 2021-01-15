<?php
/**
 * Clase utiliza php >=5.6
 * Class TipoMascota
 * @package AppBundle\Entity
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="tipo_sexo_mascota")
 */
class TipoMascota
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\ID
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $ID;
    /**
     * @ORM\Column(type="string", length=255)
     */
    public $nombre;
    /**
     * @ORM\Column(type="string", length=50)
     */
    public $estado_vigente;
}