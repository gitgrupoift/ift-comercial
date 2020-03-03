<?php

class locadores
{

    /**
     * @var locador $locador
     */
    protected $locador = null;

    /**
     * @param locador $locador
     */
    public function __construct($locador)
    {
      $this->locador = $locador;
    }

    /**
     * @return locador
     */
    public function getLocador()
    {
      return $this->locador;
    }

    /**
     * @param locador $locador
     * @return locadores
     */
    public function setLocador($locador)
    {
      $this->locador = $locador;
      return $this;
    }

}
