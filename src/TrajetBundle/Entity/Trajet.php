<?php

namespace TrajetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trajet
 */
class Trajet
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var bool
     */
    private $trajet10k1;

    /**
     * @var bool
     */
    private $trajet10k2;

    /**
     * @var bool
     */
    private $trajet10k3;

    /**
     * @var bool
     */
    private $trajet10k4;

    /**
     * @var bool
     */
    private $trajet20k1;

    /**
     * @var bool
     */
    private $trajet20k2;

    /**
     * @var bool
     */
    private $trajet20k3;

    /**
     * @var bool
     */
    private $trajet20k4;

    /**
     * @var bool
     */
    private $trajet30k1;

    /**
     * @var bool
     */
    private $trajet30k2;

    /**
     * @var bool
     */
    private $trajet30k3;

    /**
     * @var bool
     */
    private $trajet30k4;

    /**
     * @var bool
     */
    private $trajet40k1;

    /**
     * @var bool
     */
    private $trajet40k2;

    /**
     * @var bool
     */
    private $trajet40k3;

    /**
     * @var bool
     */
    private $trajet40k4;

    /**
     * @var bool
     */
    private $trajet50k1;

    /**
     * @var bool
     */
    private $trajet50k2;

    /**
     * @var bool
     */
    private $trajet50k3;

    /**
     * @var bool
     */
    private $trajet50k4;

    /**
     * @var bool
     */
    private $trajet60k1;

    /**
     * @var bool
     */
    private $trajet60k2;

    /**
     * @var bool
     */
    private $trajet60k3;

    /**
     * @var bool
     */
    private $trajet60k4;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set trajet10k1
     *
     * @param boolean $trajet10k1
     * @return Trajet
     */
    public function setTrajet10k1($trajet10k1)
    {
        $this->trajet10k1 = $trajet10k1;

        return $this;
    }

    /**
     * Get trajet10k1
     *
     * @return boolean 
     */
    public function getTrajet10k1()
    {
        return $this->trajet10k1;
    }

    /**
     * Set trajet10k2
     *
     * @param boolean $trajet10k2
     * @return Trajet
     */
    public function setTrajet10k2($trajet10k2)
    {
        $this->trajet10k2 = $trajet10k2;

        return $this;
    }

    /**
     * Get trajet10k2
     *
     * @return boolean 
     */
    public function getTrajet10k2()
    {
        return $this->trajet10k2;
    }

    /**
     * Set trajet10k3
     *
     * @param boolean $trajet10k3
     * @return Trajet
     */
    public function setTrajet10k3($trajet10k3)
    {
        $this->trajet10k3 = $trajet10k3;

        return $this;
    }

    /**
     * Get trajet10k3
     *
     * @return boolean 
     */
    public function getTrajet10k3()
    {
        return $this->trajet10k3;
    }

    /**
     * Set trajet10k4
     *
     * @param boolean $trajet10k4
     * @return Trajet
     */
    public function setTrajet10k4($trajet10k4)
    {
        $this->trajet10k4 = $trajet10k4;

        return $this;
    }

    /**
     * Get trajet10k4
     *
     * @return boolean 
     */
    public function getTrajet10k4()
    {
        return $this->trajet10k4;
    }

    /**
     * Set trajet20k1
     *
     * @param boolean $trajet20k1
     * @return Trajet
     */
    public function setTrajet20k1($trajet20k1)
    {
        $this->trajet20k1 = $trajet20k1;

        return $this;
    }

    /**
     * Get trajet20k1
     *
     * @return boolean 
     */
    public function getTrajet20k1()
    {
        return $this->trajet20k1;
    }

    /**
     * Set trajet20k2
     *
     * @param boolean $trajet20k2
     * @return Trajet
     */
    public function setTrajet20k2($trajet20k2)
    {
        $this->trajet20k2 = $trajet20k2;

        return $this;
    }

    /**
     * Get trajet20k2
     *
     * @return boolean 
     */
    public function getTrajet20k2()
    {
        return $this->trajet20k2;
    }

    /**
     * Set trajet20k3
     *
     * @param boolean $trajet20k3
     * @return Trajet
     */
    public function setTrajet20k3($trajet20k3)
    {
        $this->trajet20k3 = $trajet20k3;

        return $this;
    }

    /**
     * Get trajet20k3
     *
     * @return boolean 
     */
    public function getTrajet20k3()
    {
        return $this->trajet20k3;
    }

    /**
     * Set trajet20k4
     *
     * @param boolean $trajet20k4
     * @return Trajet
     */
    public function setTrajet20k4($trajet20k4)
    {
        $this->trajet20k4 = $trajet20k4;

        return $this;
    }

    /**
     * Get trajet20k4
     *
     * @return boolean 
     */
    public function getTrajet20k4()
    {
        return $this->trajet20k4;
    }

    /**
     * Set trajet30k1
     *
     * @param boolean $trajet30k1
     * @return Trajet
     */
    public function setTrajet30k1($trajet30k1)
    {
        $this->trajet30k1 = $trajet30k1;

        return $this;
    }

    /**
     * Get trajet30k1
     *
     * @return boolean 
     */
    public function getTrajet30k1()
    {
        return $this->trajet30k1;
    }

    /**
     * Set trajet30k2
     *
     * @param boolean $trajet30k2
     * @return Trajet
     */
    public function setTrajet30k2($trajet30k2)
    {
        $this->trajet30k2 = $trajet30k2;

        return $this;
    }

    /**
     * Get trajet30k2
     *
     * @return boolean 
     */
    public function getTrajet30k2()
    {
        return $this->trajet30k2;
    }

    /**
     * Set trajet30k3
     *
     * @param boolean $trajet30k3
     * @return Trajet
     */
    public function setTrajet30k3($trajet30k3)
    {
        $this->trajet30k3 = $trajet30k3;

        return $this;
    }

    /**
     * Get trajet30k3
     *
     * @return boolean 
     */
    public function getTrajet30k3()
    {
        return $this->trajet30k3;
    }

    /**
     * Set trajet30k4
     *
     * @param boolean $trajet30k4
     * @return Trajet
     */
    public function setTrajet30k4($trajet30k4)
    {
        $this->trajet30k4 = $trajet30k4;

        return $this;
    }

    /**
     * Get trajet30k4
     *
     * @return boolean 
     */
    public function getTrajet30k4()
    {
        return $this->trajet30k4;
    }

    /**
     * Set trajet40k1
     *
     * @param boolean $trajet40k1
     * @return Trajet
     */
    public function setTrajet40k1($trajet40k1)
    {
        $this->trajet40k1 = $trajet40k1;

        return $this;
    }

    /**
     * Get trajet40k1
     *
     * @return boolean 
     */
    public function getTrajet40k1()
    {
        return $this->trajet40k1;
    }

    /**
     * Set trajet40k2
     *
     * @param boolean $trajet40k2
     * @return Trajet
     */
    public function setTrajet40k2($trajet40k2)
    {
        $this->trajet40k2 = $trajet40k2;

        return $this;
    }

    /**
     * Get trajet40k2
     *
     * @return boolean 
     */
    public function getTrajet40k2()
    {
        return $this->trajet40k2;
    }

    /**
     * Set trajet40k3
     *
     * @param boolean $trajet40k3
     * @return Trajet
     */
    public function setTrajet40k3($trajet40k3)
    {
        $this->trajet40k3 = $trajet40k3;

        return $this;
    }

    /**
     * Get trajet40k3
     *
     * @return boolean 
     */
    public function getTrajet40k3()
    {
        return $this->trajet40k3;
    }

    /**
     * Set trajet40k4
     *
     * @param boolean $trajet40k4
     * @return Trajet
     */
    public function setTrajet40k4($trajet40k4)
    {
        $this->trajet40k4 = $trajet40k4;

        return $this;
    }

    /**
     * Get trajet40k4
     *
     * @return boolean 
     */
    public function getTrajet40k4()
    {
        return $this->trajet40k4;
    }

    /**
     * Set trajet50k1
     *
     * @param boolean $trajet50k1
     * @return Trajet
     */
    public function setTrajet50k1($trajet50k1)
    {
        $this->trajet50k1 = $trajet50k1;

        return $this;
    }

    /**
     * Get trajet50k1
     *
     * @return boolean 
     */
    public function getTrajet50k1()
    {
        return $this->trajet50k1;
    }

    /**
     * Set trajet50k2
     *
     * @param boolean $trajet50k2
     * @return Trajet
     */
    public function setTrajet50k2($trajet50k2)
    {
        $this->trajet50k2 = $trajet50k2;

        return $this;
    }

    /**
     * Get trajet50k2
     *
     * @return boolean 
     */
    public function getTrajet50k2()
    {
        return $this->trajet50k2;
    }

    /**
     * Set trajet50k3
     *
     * @param boolean $trajet50k3
     * @return Trajet
     */
    public function setTrajet50k3($trajet50k3)
    {
        $this->trajet50k3 = $trajet50k3;

        return $this;
    }

    /**
     * Get trajet50k3
     *
     * @return boolean 
     */
    public function getTrajet50k3()
    {
        return $this->trajet50k3;
    }

    /**
     * Set trajet50k4
     *
     * @param boolean $trajet50k4
     * @return Trajet
     */
    public function setTrajet50k4($trajet50k4)
    {
        $this->trajet50k4 = $trajet50k4;

        return $this;
    }

    /**
     * Get trajet50k4
     *
     * @return boolean 
     */
    public function getTrajet50k4()
    {
        return $this->trajet50k4;
    }

    /**
     * Set trajet60k1
     *
     * @param boolean $trajet60k1
     * @return Trajet
     */
    public function setTrajet60k1($trajet60k1)
    {
        $this->trajet60k1 = $trajet60k1;

        return $this;
    }

    /**
     * Get trajet60k1
     *
     * @return boolean 
     */
    public function getTrajet60k1()
    {
        return $this->trajet60k1;
    }

    /**
     * Set trajet60k2
     *
     * @param boolean $trajet60k2
     * @return Trajet
     */
    public function setTrajet60k2($trajet60k2)
    {
        $this->trajet60k2 = $trajet60k2;

        return $this;
    }

    /**
     * Get trajet60k2
     *
     * @return boolean 
     */
    public function getTrajet60k2()
    {
        return $this->trajet60k2;
    }

    /**
     * Set trajet60k3
     *
     * @param boolean $trajet60k3
     * @return Trajet
     */
    public function setTrajet60k3($trajet60k3)
    {
        $this->trajet60k3 = $trajet60k3;

        return $this;
    }

    /**
     * Get trajet60k3
     *
     * @return boolean 
     */
    public function getTrajet60k3()
    {
        return $this->trajet60k3;
    }

    /**
     * Set trajet60k4
     *
     * @param boolean $trajet60k4
     * @return Trajet
     */
    public function setTrajet60k4($trajet60k4)
    {
        $this->trajet60k4 = $trajet60k4;

        return $this;
    }

    /**
     * Get trajet60k4
     *
     * @return boolean 
     */
    public function getTrajet60k4()
    {
        return $this->trajet60k4;
    }
}
