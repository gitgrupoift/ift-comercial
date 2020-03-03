<?php

class registarDadosContratoResponse
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
     * @var int $numeroContrato
     */
    protected $numeroContrato = null;

    /**
     * @var erros $erros
     */
    protected $erros = null;

    /**
     * @param int $codigo
     * @param string $mensagem
     * @param int $numeroContrato
     * @param erros $erros
     */
    public function __construct($codigo, $mensagem, $numeroContrato, $erros)
    {
      $this->codigo = $codigo;
      $this->mensagem = $mensagem;
      $this->numeroContrato = $numeroContrato;
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
     * @return registarDadosContratoResponse
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
     * @return registarDadosContratoResponse
     */
    public function setMensagem($mensagem)
    {
      $this->mensagem = $mensagem;
      return $this;
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
     * @return registarDadosContratoResponse
     */
    public function setNumeroContrato($numeroContrato)
    {
      $this->numeroContrato = $numeroContrato;
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
     * @return registarDadosContratoResponse
     */
    public function setErros($erros)
    {
      $this->erros = $erros;
      return $this;
    }

}
