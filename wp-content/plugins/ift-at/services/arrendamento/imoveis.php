<?php

class imoveis
{

    /**
     * @var imovel $imovel
     */
    protected $imovel = null;

    /**
     * @param imovel $imovel
     */
    public function __construct($imovel)
    {
      $this->imovel = $imovel;
    }

    /**
     * @return imovel
     */
    public function getImovel()
    {
      return $this->imovel;
    }

    /**
     * @param imovel $imovel
     * @return imoveis
     */
    public function setImovel($imovel)
    {
      $this->imovel = $imovel;
      return $this;
    }

}
