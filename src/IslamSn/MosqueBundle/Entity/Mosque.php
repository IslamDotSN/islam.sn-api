<?php

namespace IslamSn\MosqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mosque
 *
 * @ORM\Table(name="mosque")
 * @ORM\Entity(repositoryClass="IslamSn\MosqueBundle\Repository\MosqueRepository")
 */
class Mosque
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
     * @var string
     *
     * @ORM\Column(name="mosque_name", type="string", length=255)
     */
    private $mosqueName;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=0)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=10, scale=0)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;


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
     * Set mosqueName
     *
     * @param string $mosqueName
     *
     * @return Mosque
     */
    public function setMosqueName($mosqueName)
    {
        $this->mosqueName = $mosqueName;

        return $this;
    }

    /**
     * Get mosqueName
     *
     * @return string
     */
    public function getMosqueName()
    {
        return $this->mosqueName;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Mosque
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Mosque
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Mosque
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
}

