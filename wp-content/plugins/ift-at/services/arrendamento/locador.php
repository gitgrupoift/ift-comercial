<?php

class locador
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
     * @return locador
     */
    public function setNif($nif)
    {
      $this->nif = $nif;
      return $this;
    }

}
