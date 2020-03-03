<?php

class herdeiros
{

    /**
     * @var herdeiro $herdeiro
     */
    protected $herdeiro = null;

    /**
     * @param herdeiro $herdeiro
     */
    public function __construct($herdeiro)
    {
      $this->herdeiro = $herdeiro;
    }

    /**
     * @return herdeiro
     */
    public function getHerdeiro()
    {
      return $this->herdeiro;
    }

    /**
     * @param herdeiro $herdeiro
     * @return herdeiros
     */
    public function setHerdeiro($herdeiro)
    {
      $this->herdeiro = $herdeiro;
      return $this;
    }

}
