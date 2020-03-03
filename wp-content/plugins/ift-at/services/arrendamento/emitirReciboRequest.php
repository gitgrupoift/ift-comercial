<?php

class emitirReciboRequest
{

    /**
     * @var int $numeroContrato
     */
    protected $numeroContrato = null;

    /**
     * @var nifEmitente $nifEmitente
     */
    protected $nifEmitente = null;

    /**
     * @var locadores $locadores
     */
    protected $locadores = null;

    /**
     * @var locatarios $locatarios
     */
    protected $locatarios = null;

    /**
     * @var tipo $tipo
     */
    protected $tipo = null;

    /**
     * @var date $dataInicio
     */
    protected $dataInicio = null;

    /**
     * @var date $dataFim
     */
    protected $dataFim = null;

    /**
     * @var tipoImportancia $tipoImportancia
     */
    protected $tipoImportancia = null;

    /**
     * @var float $valor
     */
    protected $valor = null;

    /**
     * @var herdeiros $herdeiros
     */
    protected $herdeiros = null;

    /**
     * @var date $dataRecebimento
     */
    protected $dataRecebimento = null;

    /**
     * @param int $numeroContrato
     * @param nifEmitente $nifEmitente
     * @param locadores $locadores
     * @param locatarios $locatarios
     * @param tipo $tipo
     * @param date $dataInicio
     * @param date $dataFim
     * @param tipoImportancia $tipoImportancia
     * @param float $valor
     * @param herdeiros $herdeiros
     * @param date $dataRecebimento
     */
    public function __construct($numeroContrato, $nifEmitente, $locadores, $locatarios, $tipo, $dataInicio, $dataFim, $tipoImportancia, $valor, $herdeiros, $dataRecebimento)
    {
      $this->numeroContrato = $numeroContrato;
      $this->nifEmitente = $nifEmitente;
      $this->locadores = $locadores;
      $this->locatarios = $locatarios;
      $this->tipo = $tipo;
      $this->dataInicio = $dataInicio;
      $this->dataFim = $dataFim;
      $this->tipoImportancia = $tipoImportancia;
      $this->valor = $valor;
      $this->herdeiros = $herdeiros;
      $this->dataRecebimento = $dataRecebimento;
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
     * @return emitirReciboRequest
     */
    public function setNumeroContrato($numeroContrato)
    {
      $this->numeroContrato = $numeroContrato;
      return $this;
    }

    /**
     * @return nifEmitente
     */
    public function getNifEmitente()
    {
      return $this->nifEmitente;
    }

    /**
     * @param nifEmitente $nifEmitente
     * @return emitirReciboRequest
     */
    public function setNifEmitente($nifEmitente)
    {
      $this->nifEmitente = $nifEmitente;
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
     * @return emitirReciboRequest
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
     * @return emitirReciboRequest
     */
    public function setLocatarios($locatarios)
    {
      $this->locatarios = $locatarios;
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
     * @return emitirReciboRequest
     */
    public function setTipo($tipo)
    {
      $this->tipo = $tipo;
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
     * @return emitirReciboRequest
     */
    public function setDataInicio($dataInicio)
    {
      $this->dataInicio = $dataInicio;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataFim()
    {
      return $this->dataFim;
    }

    /**
     * @param date $dataFim
     * @return emitirReciboRequest
     */
    public function setDataFim($dataFim)
    {
      $this->dataFim = $dataFim;
      return $this;
    }

    /**
     * @return tipoImportancia
     */
    public function getTipoImportancia()
    {
      return $this->tipoImportancia;
    }

    /**
     * @param tipoImportancia $tipoImportancia
     * @return emitirReciboRequest
     */
    public function setTipoImportancia($tipoImportancia)
    {
      $this->tipoImportancia = $tipoImportancia;
      return $this;
    }

    /**
     * @return float
     */
    public function getValor()
    {
      return $this->valor;
    }

    /**
     * @param float $valor
     * @return emitirReciboRequest
     */
    public function setValor($valor)
    {
      $this->valor = $valor;
      return $this;
    }

    /**
     * @return herdeiros
     */
    public function getHerdeiros()
    {
      return $this->herdeiros;
    }

    /**
     * @param herdeiros $herdeiros
     * @return emitirReciboRequest
     */
    public function setHerdeiros($herdeiros)
    {
      $this->herdeiros = $herdeiros;
      return $this;
    }

    /**
     * @return date
     */
    public function getDataRecebimento()
    {
      return $this->dataRecebimento;
    }

    /**
     * @param date $dataRecebimento
     * @return emitirReciboRequest
     */
    public function setDataRecebimento($dataRecebimento)
    {
      $this->dataRecebimento = $dataRecebimento;
      return $this;
    }

}
