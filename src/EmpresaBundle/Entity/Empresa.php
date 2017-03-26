<?php

namespace EmpresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity(repositoryClass="EmpresaBundle\Repository\EmpresaRepository")
 */
class Empresa
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="cuit", type="bigint", unique=true)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="empleados", type="integer")
     */
    private $empleados;


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
     * Set cuit
     *
     * @param integer $cuit
     *
     * @return Empresa
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;

        return $this;
    }

    /**
     * Get cuit
     *
     * @return int
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set empleados
     *
     * @param integer $empleados
     *
     * @return Empresa
     */
    public function setEmpleados($empleados)
    {
        $this->empleados = $empleados;

        return $this;
    }

    /**
     * Get empleados
     *
     * @return int
     */
    public function getEmpleados()
    {
        return $this->empleados;
    }
}

