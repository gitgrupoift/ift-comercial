<?php

class locadoresPrevios
{

    /**
     * @var locadorPrevio $locadorPrevio
     */
    protected $locadorPrevio = null;

    /**
     * @param locadorPrevio $locadorPrevio
     */
    public function __construct($locadorPrevio)
    {
      $this->locadorPrevio = $locadorPrevio;
    }

    /**
     * @return locadorPrevio
     */
    public function getLocadorPrevio()
    {
      return $this->locadorPrevio;
    }

    /**
     * @param locadorPrevio $locadorPrevio
     * @return locadoresPrevios
     */
    public function setLocadorPrevio($locadorPrevio)
    {
      $this->locadorPrevio = $locadorPrevio;
      return $this;
    }

}
