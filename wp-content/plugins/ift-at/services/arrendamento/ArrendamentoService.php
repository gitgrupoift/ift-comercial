<?php

class ArrendamentoService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'registarDadosContratoRequest' => '\\registarDadosContratoRequest',
      'imoveis' => '\\imoveis',
      'imovel' => '\\imovel',
      'locadores' => '\\locadores',
      'locador' => '\\locador',
      'locatarios' => '\\locatarios',
      'locatario' => '\\locatario',
      'locadoresPrevios' => '\\locadoresPrevios',
      'locadorPrevio' => '\\locadorPrevio',
      'registarDadosContratoResponse' => '\\registarDadosContratoResponse',
      'erros' => '\\erros',
      'erro' => '\\erro',
      'emitirReciboRequest' => '\\emitirReciboRequest',
      'herdeiros' => '\\herdeiros',
      'herdeiro' => '\\herdeiro',
      'emitirReciboResponse' => '\\emitirReciboResponse',
      'obterReciboRequest' => '\\obterReciboRequest',
      'obterReciboResponse' => '\\obterReciboResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'arrendamento.wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param registarDadosContratoRequest $registarDadosContratoRequest
     * @return registarDadosContratoResponse
     */
    public function registarDadosContrato(registarDadosContratoRequest $registarDadosContratoRequest)
    {
      return $this->__soapCall('registarDadosContrato', array($registarDadosContratoRequest));
    }

    /**
     * @param obterReciboRequest $obterReciboRequest
     * @return obterReciboResponse
     */
    public function obterRecibo(obterReciboRequest $obterReciboRequest)
    {
      return $this->__soapCall('obterRecibo', array($obterReciboRequest));
    }

    /**
     * @param emitirReciboRequest $emitirReciboRequest
     * @return emitirReciboResponse
     */
    public function emitirRecibo(emitirReciboRequest $emitirReciboRequest)
    {
      return $this->__soapCall('emitirRecibo', array($emitirReciboRequest));
    }

}
