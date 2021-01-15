<?php

/**
 * Clase utiliza php >=5.6
 * Class Mascota
 * @package AppBundle\Entity
 */
namespace AppBundle\Entity;

class Mascota
{
    public $ID;
    public $fecha_creacion;
    public $fecha_actualizacion;
    public $numero_chip;
    public $nombre;
    public $apellido_mascota;
    public $tipo_mascota_ID;
    public $tipo_sexo_ID;
    public $color;
    public $fecha_nacimiento;
    public $raza;
    public $estirilizacion_castracion;
    public $persona_ID;
    public $observacion;
    public $estado_vigente;
}