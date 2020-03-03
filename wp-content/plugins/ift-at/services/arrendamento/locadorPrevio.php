<?php

class locadorPrevio
{

    /**
     * @var nif $nif
     */
    protected $nif = null;

    /**
     * @param nif $nif
     */
    public function __construct($nif)
    {
      $this->nif = $nif;
    }

    /**
     * @return nif
     */
    public function getNif()
    {
      return $this->nif;
    }

    /**
     * @param nif $nif
     * @return locadorPrevio
     */
    public function setNif($nif)
    {
      $this->nif = $nif;
      return $this;
    }

}
