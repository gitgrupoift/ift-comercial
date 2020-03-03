<?php

class emitirReciboResponse
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
     * @var int $numeroRecibo
     */
    protected $numeroRecibo = null;

    /**
     * @var erros $erros
     */
    protected $erros = null;

    /**
     * @param int $codigo
     * @param string $mensagem
     * @param int $numeroRecibo
     * @param erros $erros
     */
    public function __construct($codigo, $mensagem, $numeroRecibo, $erros)
    {
      $this->codigo = $codigo;
      $this->mensagem = $mensagem;
      $this->numeroRecibo = $numeroRecibo;
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
     * @return emitirReciboResponse
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
     * @return emitirReciboResponse
     */
    public function setMensagem($mensagem)
    {
      $this->mensagem = $mensagem;
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
     * @return emitirReciboResponse
     */
    public function setNumeroRecibo($numeroRecibo)
    {
      $this->numeroRecibo = $numeroRecibo;
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
     * @return emitirReciboResponse
     */
    public function setErros($erros)
    {
      $this->erros = $erros;
      return $this;
    }

}
