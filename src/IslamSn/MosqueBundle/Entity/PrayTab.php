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
     * @var time_immutable
     *
     * @ORM\Column(name="suuba", type="time_immutable")
     */
    private $suuba;

    /**
     * @var time_immutable
     *
     * @ORM\Column(name="fadjr", type="time_immutable")
     */
    private $fadjr;

    /**
     * @var time_immutable
     *
     * @ORM\Column(name="tisbar", type="time_immutable")
     */
    private $tisbar;

    /**
     * @var time_immutable
     *
     * @ORM\Column(name="takussan", type="time_immutable")
     */
    private $takussan;

    /**
     * @var time_immutable
     *
     * @ORM\Column(name="timis", type="time_immutable")
     */
    private $timis;

    /**
     * @var time_immutable
     *
     * @ORM\Column(name="guewe", type="time_immutable")
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
     * @param time_immutable $suuba
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
     * @return time_immutable
     */
    public function getSuuba()
    {
        return $this->suuba;
    }

    /**
     * Set fadjr
     *
     * @param time_immutable $fadjr
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
     * @return time_immutable
     */
    public function getFadjr()
    {
        return $this->fadjr;
    }

    /**
     * Set tisbar
     *
     * @param time_immutable $tisbar
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
     * @return time_immutable
     */
    public function getTisbar()
    {
        return $this->tisbar;
    }

    /**
     * Set takussan
     *
     * @param time_immutable $takussan
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
     * @return time_immutable
     */
    public function getTakussan()
    {
        return $this->takussan;
    }

    /**
     * Set timis
     *
     * @param time_immutable $timis
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
     * @return time_immutable
     */
    public function getTimis()
    {
        return $this->timis;
    }

    /**
     * Set guewe
     *
     * @param time_immutable $guewe
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
     * @return time_immutable
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

