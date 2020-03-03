<?php

class obterReciboRequest
{

    /**
     * @var int $numeroContrato
     */
    protected $numeroContrato = null;

    /**
     * @var int $numeroRecibo
     */
    protected $numeroRecibo = null;

    /**
     * @param int $numeroContrato
     * @param int $numeroRecibo
     */
    public function __construct($numeroContrato, $numeroRecibo)
    {
      $this->numeroContrato = $numeroContrato;
      $this->numeroRecibo = $numeroRecibo;
    }

    /**
     * @return int
     */
    public function getNumeroContrato()
    {
      return $this->numeroContrato;
    }

    /**
     * @param int $numeroContrato
     * @return obterReciboRequest
     */
    public function setNumeroContrato($numeroContrato)
    {
      $this->numeroContrato = $numeroContrato;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumeroRecibo()
    {
      return $this->numeroRecibo;
    }

    /**
     * @param int $numeroRecibo
     * @return obterReciboRequest
     */
    public function setNumeroRecibo($numeroRecibo)
    {
      $this->numeroRecibo = $numeroRecibo;
      return $this;
    }

}
