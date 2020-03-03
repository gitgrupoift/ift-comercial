<?php

class obterReciboResponse
{

    /**
     * @var int $codigo
     */
    protected $codigo = null;

    /**
     * @var string $mensagem
     */
    protected $mensagem = null;

    /**
     * @var base64Binary $recibo
     */
    protected $recibo = null;

    /**
     * @var erros $erros
     */
    protected $erros = null;

    /**
     * @param int $codigo
     * @param string $mensagem
     * @param base64Binary $recibo
     * @param erros $erros
     */
    public function __construct($codigo, $mensagem, $recibo, $erros)
    {
      $this->codigo = $codigo;
      $this->mensagem = $mensagem;
      $this->recibo = $recibo;
      $this->erros = $erros;
    }

    /**
     * @return int
     */
    public function getCodigo()
    {
      return $this->codigo;
    }

    /**
     * @param int $codigo
     * @return obterReciboResponse
     */
    public function setCodigo($codigo)
    {
      $this->codigo = $codigo;
      return $this;
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
     * @return obterReciboResponse
     */
    public function setMensagem($mensagem)
    {
      $this->mensagem = $mensagem;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getRecibo()
    {
      return $this->recibo;
    }

    /**
     * @param base64Binary $recibo
     * @return obterReciboResponse
     */
    public function setRecibo($recibo)
    {
      $this->recibo = $recibo;
      return $this;
    }

    /**
     * @return erros
     */
    public function getErros()
    {
      return $this->erros;
    }

    /**
     * @param erros $erros
     * @return obterReciboResponse
     */
    public function setErros($erros)
    {
      $this->erros = $erros;
      return $this;
    }

}
