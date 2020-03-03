<?php

class erro
{

    /**
     * @var string $mensagem
     */
    protected $mensagem = null;

    /**
     * @param string $mensagem
     */
    public function __construct($mensagem)
    {
      $this->mensagem = $mensagem;
    }

    /**
     * @return string
     */
    public function getMensagem()
    {
      return $this->mensagem;
    }

    /**
     * @param string $mensagem
     * @return erro
     */
    public function setMensagem($mensagem)
    {
      $this->mensagem = $mensagem;
      return $this;
    }

}
