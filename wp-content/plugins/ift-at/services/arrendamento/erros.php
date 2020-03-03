<?php

class erros
{

    /**
     * @var erro $erro
     */
    protected $erro = null;

    /**
     * @param erro $erro
     */
    public function __construct($erro)
    {
      $this->erro = $erro;
    }

    /**
     * @return erro
     */
    public function getErro()
    {
      return $this->erro;
    }

    /**
     * @param erro $erro
     * @return erros
     */
    public function setErro($erro)
    {
      $this->erro = $erro;
      return $this;
    }

}
