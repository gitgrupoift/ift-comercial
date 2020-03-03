<?php

class registarDadosContratoRequest
{

    /**
     * @var nifDeclarante $nifDeclarante
     */
    protected $nifDeclarante = null;

    /**
     * @var referencia $referencia
     */
    protected $referencia = null;

    /**
     * @var tipo $tipo
     */
    protected $tipo = null;

    /**
     * @var finalidade $finalidade
     */
    protected $finalidade = null;

    /**
     * @var date $dataInicio
     */
    protected $dataInicio = null;

    /**
     * @var date $dataTermo
     */
    protected $dataTermo = null;

    /**
     * @var boolean $renovavel
     */
    protected $renovavel = null;

    /**
     * @var imoveis $imoveis
     */
    protected $imoveis = null;

    /**
     * @var locadores $locadores
     */
    protected $locadores = null;

    /**
     * @var locatarios $locatarios
     */
    protected $locatarios = null;

    /**
     * @var float $valorRenda
     */
    protected $valorRenda = null;

    /**
     * @var float $valorDespesas
     */
    protected $valorDespesas = null;

    /**
     * @var float $valorRendaMaxima
     */
    protected $valorRendaMaxima = null;

    /**
     * @var periodoRenda $periodoRenda
     */
    protected $periodoRenda = null;

    /**
     * @var locadoresPrevios $locadoresPrevios
     */
    protected $locadoresPrevios = null;

    /**
     * @var observacoes $observacoes
     */
    protected $observacoes = null;

    /**
     * @var nifAutorizado $nifAutorizado
     */
    protected $nifAutorizado = null;

    /**
     * @param nifDeclarante $nifDeclarante
     * @param referencia $referencia
     * @param tipo $tipo
     * @param finalidade $finalidade
     * @param date $dataInicio
     * @param date $dataTermo
     * @param boolean $renovavel
     * @param imoveis $imoveis
     * @param locadores $locadores
     * @param locatarios $locatarios
     * @param float $valorRenda
     * @param float $valorDespesas
     * @param float $valorRendaMaxima
     * @param periodoRenda $periodoRenda
     * @param locadoresPrevios $locadoresPrevios
     * @param observacoes $observacoes
     * @param nifAutorizado $nifAutorizado
     */
    public function __construct($nifDeclarante, $referencia, $tipo, $finalidade, $dataInicio, $dataTermo, $renovavel, $imoveis, $locadores, $locatarios, $valorRenda, $valorDespesas, $valorRendaMaxima, $periodoRenda, $locadoresPrevios, $observacoes, $nifAutorizado)
    {
      $this->nifDeclarante = $nifDeclarante;
      $this->referencia = $referencia;
      $this->tipo = $tipo;
      $this->finalidade = $finalidade;
      $this->dataInicio = $dataInicio;
      $this->dataTermo = $dataTermo;
      $this->renovavel = $renovavel;
      $this->imoveis = $imoveis;
      $this->locadores = $locadores;
      $this->locatarios = $locatarios;
      $this->valorRenda = $valorRenda;
      $this->valorDespesas = $valorDespesas;
      $this->valorRendaMaxima = $valorRendaMaxima;
      $this->periodoRenda = $periodoRenda;
      $this->locadoresPrevios = $locadoresPrevios;
      $this->observacoes = $observacoes;
      $this->nifAutorizado = $nifAutorizado;
    }

    /**
     * @return nifDeclarante
     */
    public function getNifDeclarante()
    {
      return $this->nifDeclarante;
    }

    /**
     * @param nifDeclarante $nifDeclarante
     * @return registarDadosContratoRequest
     */
    public function setNifDeclarante($nifDeclarante)
    {
      $this->nifDeclarante = $nifDeclarante;
      return $this;
    }

    /**
     * @return referencia
     */
    public function getReferencia()
    {
      return $this->referencia;
    }

    /**
     * @param referencia $referencia
     * @return registarDadosContratoRequest
     */
    public function setReferencia($referencia)
    {
      $this->referencia = $referencia;
      return $this;
    }

    /**
     * @return tipo
     */
    public function getTipo()
    {
      return $this->tipo;
    }

    /**
     * @param tipo $tipo
     * @return registarDadosContratoRequest
     */
    public function setTipo($tipo)
    {
      $this->tipo = $tipo;
      return $this;
    }

    /**
     * @return finalidade
     */
    public function getFinalidade()
    {
      return $this->finalidade;
    }

    /**
     * @param finalidade $finalidade
     * @return registarDadosContratoRequest
     */
    public function setFinalidade($finalidade)
    {
      $this->finalidade = $finalidade;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataInicio()
    {
      return $this->dataInicio;
    }

    /**
     * @param date $dataInicio
     * @return registarDadosContratoRequest
     */
    public function setDataInicio($dataInicio)
    {
      $this->dataInicio = $dataInicio;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataTermo()
    {
      return $this->dataTermo;
    }

    /**
     * @param date $dataTermo
     * @return registarDadosContratoRequest
     */
    public function setDataTermo($dataTermo)
    {
      $this->dataTermo = $dataTermo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRenovavel()
    {
      return $this->renovavel;
    }

    /**
     * @param boolean $renovavel
     * @return registarDadosContratoRequest
     */
    public function setRenovavel($renovavel)
    {
      $this->renovavel = $renovavel;
      return $this;
    }

    /**
     * @return imoveis
     */
    public function getImoveis()
    {
      return $this->imoveis;
    }

    /**
     * @param imoveis $imoveis
     * @return registarDadosContratoRequest
     */
    public function setImoveis($imoveis)
    {
      $this->imoveis = $imoveis;
      return $this;
    }

    /**
     * @return locadores
     */
    public function getLocadores()
    {
      return $this->locadores;
    }

    /**
     * @param locadores $locadores
     * @return registarDadosContratoRequest
     */
    public function setLocadores($locadores)
    {
      $this->locadores = $locadores;
      return $this;
    }

    /**
     * @return locatarios
     */
    public function getLocatarios()
    {
      return $this->locatarios;
    }

    /**
     * @param locatarios $locatarios
     * @return registarDadosContratoRequest
     */
    public function setLocatarios($locatarios)
    {
      $this->locatarios = $locatarios;
      return $this;
    }

    /**
     * @return float
     */
    public function getValorRenda()
    {
      return $this->valorRenda;
    }

    /**
     * @param float $valorRenda
     * @return registarDadosContratoRequest
     */
    public function setValorRenda($valorRenda)
    {
      $this->valorRenda = $valorRenda;
      return $this;
    }

    /**
     * @return float
     */
    public function getValorDespesas()
    {
      return $this->valorDespesas;
    }

    /**
     * @param float $valorDespesas
     * @return registarDadosContratoRequest
     */
    public function setValorDespesas($valorDespesas)
    {
      $this->valorDespesas = $valorDespesas;
      return $this;
    }

    /**
     * @return float
     */
    public function getValorRendaMaxima()
    {
      return $this->valorRendaMaxima;
    }

    /**
     * @param float $valorRendaMaxima
     * @return registarDadosContratoRequest
     */
    public function setValorRendaMaxima($valorRendaMaxima)
    {
      $this->valorRendaMaxima = $valorRendaMaxima;
      return $this;
    }

    /**
     * @return periodoRenda
     */
    public function getPeriodoRenda()
    {
      return $this->periodoRenda;
    }

    /**
     * @param periodoRenda $periodoRenda
     * @return registarDadosContratoRequest
     */
    public function setPeriodoRenda($periodoRenda)
    {
      $this->periodoRenda = $periodoRenda;
      return $this;
    }

    /**
     * @return locadoresPrevios
     */
    public function getLocadoresPrevios()
    {
      return $this->locadoresPrevios;
    }

    /**
     * @param locadoresPrevios $locadoresPrevios
     * @return registarDadosContratoRequest
     */
    public function setLocadoresPrevios($locadoresPrevios)
    {
      $this->locadoresPrevios = $locadoresPrevios;
      return $this;
    }

    /**
     * @return observacoes
     */
    public function getObservacoes()
    {
      return $this->observacoes;
    }

    /**
     * @param observacoes $observacoes
     * @return registarDadosContratoRequest
     */
    public function setObservacoes($observacoes)
    {
      $this->observacoes = $observacoes;
      return $this;
    }

    /**
     * @return nifAutorizado
     */
    public function getNifAutorizado()
    {
      return $this->nifAutorizado;
    }

    /**
     * @param nifAutorizado $nifAutorizado
     * @return registarDadosContratoRequest
     */
    public function setNifAutorizado($nifAutorizado)
    {
      $this->nifAutorizado = $nifAutorizado;
      return $this;
    }

}
