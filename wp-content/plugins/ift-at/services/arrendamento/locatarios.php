<?php

class locatarios
{

    /**
     * @var locatario $locatario
     */
    protected $locatario = null;

    /**
     * @param locatario $locatario
     */
    public function __construct($locatario)
    {
      $this->locatario = $locatario;
    }

    /**
     * @return locatario
     */
    public function getLocatario()
    {
      return $this->locatario;
    }

    /**
     * @param locatario $locatario
     * @return locatarios
     */
    public function setLocatario($locatario)
    {
      $this->locatario = $locatario;
      return $this;
    }

}
