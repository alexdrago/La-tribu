<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ProductosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ProductosRepository::class)
 */
class Productos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $material;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $medidas;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otraInformacion;

    /**
     * @ORM\Column(type="object")
     */
    private $imagen1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagen2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $imagen3;

    /**
     * @ORM\Column(type="integer")
     */
    private $precio;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getMaterial(): ?string
    {
        return $this->material;
    }

    public function setMaterial(?string $material): self
    {
        $this->material = $material;

        return $this;
    }

    public function getMedidas(): ?string
    {
        return $this->medidas;
    }

    public function setMedidas(?string $medidas): self
    {
        $this->medidas = $medidas;

        return $this;
    }

    public function getOtraInformacion(): ?string
    {
        return $this->otraInformacion;
    }

    public function setOtraInformacion(?string $otraInformacion): self
    {
        $this->otraInformacion = $otraInformacion;

        return $this;
    }

    public function getImagen1()
    {
        return $this->imagen1;
    }

    public function setImagen1($imagen1): self
    {
        $this->imagen1 = $imagen1;

        return $this;
    }

    public function getImagen2(): ?string
    {
        return $this->imagen2;
    }

    public function setImagen2(?string $imagen2): self
    {
        $this->imagen2 = $imagen2;

        return $this;
    }

    public function getImagen3(): ?string
    {
        return $this->imagen3;
    }

    public function setImagen3(?string $imagen3): self
    {
        $this->imagen3 = $imagen3;

        return $this;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(int $precio): self
    {
        $this->precio = $precio;

        return $this;
    }
}
