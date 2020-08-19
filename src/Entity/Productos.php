<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Core\Serializer\Filter\PropertyFilter;
use App\Repository\ProductoRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 * @ApiResource(
 *     collectionOperations={"get", "post"},
 *     itemOperations={"get", "put", "delete"},
 *
 *     normalizationContext={"groups"={"producto_listado:read"},"swagger_definition_name"="Lectura"},
 *     denormalizationContext={"groups"={"producto_listado:write"},"swagger_definition_name"="Escritura"},
 *
 *     shortName="producto",
 *     attributes={
 *          "pagination_items_per_page"=10
 *     }
 * )
 * 
 * @ORM\Table(name="productos")
 * @ORM\Entity(repositoryClass=ProductoRepository::class)
 * @ApiFilter(
 *     SearchFilter::class,
 *     properties={"Nombre":"partial",
 *     PropertyFilter::class})
 */
class Productos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"producto_listado:read"})
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Referencia", type="string", length=12, nullable=true)
     */
    private $referencia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nombre", type="string", length=48, nullable=true)
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripci_n", type="string", length=907, nullable=true)
     */
    private $descripciN;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Material", type="string", length=61, nullable=true)
     */
    private $material;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Medidas", type="string", length=115, nullable=true)
     */
    private $medidas;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Otra_informaci_n", type="string", length=232, nullable=true)
     */
    private $otraInformaciN;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Imagen_1", type="string", length=65, nullable=true)
     */
    private $imagen1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Imagen_2", type="string", length=66, nullable=true)
     */
    private $imagen2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="imagen_3", type="string", length=61, nullable=true)
     */
    private $imagen3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Precio_IVA_no_incl", type="decimal", precision=7, scale=5, nullable=true)
     */
    private $precioIvaNoIncl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReferencia(): ?string
    {
        return $this->referencia;
    }

    public function setReferencia(?string $referencia): self
    {
        $this->referencia = $referencia;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripciN(): ?string
    {
        return $this->descripciN;
    }

    public function setDescripciN(?string $descripciN): self
    {
        $this->descripciN = $descripciN;

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

    public function getOtraInformaciN(): ?string
    {
        return $this->otraInformaciN;
    }

    public function setOtraInformaciN(?string $otraInformaciN): self
    {
        $this->otraInformaciN = $otraInformaciN;

        return $this;
    }

    public function getImagen1(): ?string
    {
        return $this->imagen1;
    }

    public function setImagen1(?string $imagen1): self
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

    public function getPrecioIvaNoIncl(): ?string
    {
        return $this->precioIvaNoIncl;
    }

    public function setPrecioIvaNoIncl(?string $precioIvaNoIncl): self
    {
        $this->precioIvaNoIncl = $precioIvaNoIncl;

        return $this;
    }
    public function __toString()
    {
        return $this->getNombre();
    }

}
