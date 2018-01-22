<?php

namespace IslamSn\MosqueBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrayTab
 *
 * @ORM\Table(name="pray_tab")
 * @ORM\Entity(repositoryClass="IslamSn\MosqueBundle\Repository\PrayTabRepository")
 */
class PrayTab
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
     * @var time
     *
     * @ORM\Column(name="suuba", type="time")
     */
    private $suuba;

    /**
     * @var time
     *
     * @ORM\Column(name="fadjr", type="time")
     */
    private $fadjr;

    /**
     * @var time
     *
     * @ORM\Column(name="tisbar", type="time")
     */
    private $tisbar;

    /**
     * @var time
     *
     * @ORM\Column(name="takussan", type="time")
     */
    private $takussan;

    /**
     * @var time
     *
     * @ORM\Column(name="timis", type="time")
     */
    private $timis;

    /**
     * @var time
     *
     * @ORM\Column(name="guewe", type="time")
     */
    private $guewe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tabStartDate", type="datetime")
     */
    private $tabStartDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tabEndDate", type="datetime")
     */
    private $tabEndDate;


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
     * Set suuba
     *
     * @param time $suuba
     *
     * @return PrayTab
     */
    public function setSuuba($suuba)
    {
        $this->suuba = $suuba;

        return $this;
    }

    /**
     * Get suuba
     *
     * @return time
     */
    public function getSuuba()
    {
        return $this->suuba;
    }

    /**
     * Set fadjr
     *
     * @param time $fadjr
     *
     * @return PrayTab
     */
    public function setFadjr($fadjr)
    {
        $this->fadjr = $fadjr;

        return $this;
    }

    /**
     * Get fadjr
     *
     * @return time
     */
    public function getFadjr()
    {
        return $this->fadjr;
    }

    /**
     * Set tisbar
     *
     * @param time $tisbar
     *
     * @return PrayTab
     */
    public function setTisbar($tisbar)
    {
        $this->tisbar = $tisbar;

        return $this;
    }

    /**
     * Get tisbar
     *
     * @return time
     */
    public function getTisbar()
    {
        return $this->tisbar;
    }

    /**
     * Set takussan
     *
     * @param time $takussan
     *
     * @return PrayTab
     */
    public function setTakussan($takussan)
    {
        $this->takussan = $takussan;

        return $this;
    }

    /**
     * Get takussan
     *
     * @return time
     */
    public function getTakussan()
    {
        return $this->takussan;
    }

    /**
     * Set timis
     *
     * @param time $timis
     *
     * @return PrayTab
     */
    public function setTimis($timis)
    {
        $this->timis = $timis;

        return $this;
    }

    /**
     * Get timis
     *
     * @return time
     */
    public function getTimis()
    {
        return $this->timis;
    }

    /**
     * Set guewe
     *
     * @param time $guewe
     *
     * @return PrayTab
     */
    public function setGuewe($guewe)
    {
        $this->guewe = $guewe;

        return $this;
    }

    /**
     * Get guewe
     *
     * @return time
     */
    public function getGuewe()
    {
        return $this->guewe;
    }

    /**
     * Set tabStartDate
     *
     * @param \DateTime $tabStartDate
     *
     * @return PrayTab
     */
    public function setTabStartDate($tabStartDate)
    {
        $this->tabStartDate = $tabStartDate;

        return $this;
    }

    /**
     * Get tabStartDate
     *
     * @return \DateTime
     */
    public function getTabStartDate()
    {
        return $this->tabStartDate;
    }

    /**
     * Set tabEndDate
     *
     * @param \DateTime $tabEndDate
     *
     * @return PrayTab
     */
    public function setTabEndDate($tabEndDate)
    {
        $this->tabEndDate = $tabEndDate;

        return $this;
    }

    /**
     * Get tabEndDate
     *
     * @return \DateTime
     */
    public function getTabEndDate()
    {
        return $this->tabEndDate;
    }
}

