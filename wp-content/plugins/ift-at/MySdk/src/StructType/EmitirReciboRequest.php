<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emitirReciboRequest StructType
 * @subpackage Structs
 */
class EmitirReciboRequest extends AbstractStructBase
{
    /**
     * The numeroContrato
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $numeroContrato;
    /**
     * The nifEmitente
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: \d{9}
     * @var int
     */
    public $nifEmitente;
    /**
     * The locadores
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\Locadores
     */
    public $locadores;
    /**
     * The locatarios
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\Locatarios
     */
    public $locatarios;
    /**
     * The tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $tipo;
    /**
     * The dataInicio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $dataInicio;
    /**
     * The dataFim
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $dataFim;
    /**
     * The tipoImportancia
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $tipoImportancia;
    /**
     * The valor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $valor;
    /**
     * The dataRecebimento
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $dataRecebimento;
    /**
     * The herdeiros
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Herdeiros
     */
    public $herdeiros;
    /**
     * Constructor method for emitirReciboRequest
     * @uses EmitirReciboRequest::setNumeroContrato()
     * @uses EmitirReciboRequest::setNifEmitente()
     * @uses EmitirReciboRequest::setLocadores()
     * @uses EmitirReciboRequest::setLocatarios()
     * @uses EmitirReciboRequest::setTipo()
     * @uses EmitirReciboRequest::setDataInicio()
     * @uses EmitirReciboRequest::setDataFim()
     * @uses EmitirReciboRequest::setTipoImportancia()
     * @uses EmitirReciboRequest::setValor()
     * @uses EmitirReciboRequest::setDataRecebimento()
     * @uses EmitirReciboRequest::setHerdeiros()
     * @param int $numeroContrato
     * @param int $nifEmitente
     * @param \StructType\Locadores $locadores
     * @param \StructType\Locatarios $locatarios
     * @param string $tipo
     * @param string $dataInicio
     * @param string $dataFim
     * @param string $tipoImportancia
     * @param float $valor
     * @param string $dataRecebimento
     * @param \StructType\Herdeiros $herdeiros
     */
    public function __construct($numeroContrato = null, $nifEmitente = null, \StructType\Locadores $locadores = null, \StructType\Locatarios $locatarios = null, $tipo = null, $dataInicio = null, $dataFim = null, $tipoImportancia = null, $valor = null, $dataRecebimento = null, \StructType\Herdeiros $herdeiros = null)
    {
        $this
            ->setNumeroContrato($numeroContrato)
            ->setNifEmitente($nifEmitente)
            ->setLocadores($locadores)
            ->setLocatarios($locatarios)
            ->setTipo($tipo)
            ->setDataInicio($dataInicio)
            ->setDataFim($dataFim)
            ->setTipoImportancia($tipoImportancia)
            ->setValor($valor)
            ->setDataRecebimento($dataRecebimento)
            ->setHerdeiros($herdeiros);
    }
    /**
     * Get numeroContrato value
     * @return int
     */
    public function getNumeroContrato()
    {
        return $this->numeroContrato;
    }
    /**
     * Set numeroContrato value
     * @param int $numeroContrato
     * @return \StructType\EmitirReciboRequest
     */
    public function setNumeroContrato($numeroContrato = null)
    {
        // validation for constraint: int
        if (!is_null($numeroContrato) && !(is_int($numeroContrato) || ctype_digit($numeroContrato))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroContrato, true), gettype($numeroContrato)), __LINE__);
        }
        $this->numeroContrato = $numeroContrato;
        return $this;
    }
    /**
     * Get nifEmitente value
     * @return int
     */
    public function getNifEmitente()
    {
        return $this->nifEmitente;
    }
    /**
     * Set nifEmitente value
     * @param int $nifEmitente
     * @return \StructType\EmitirReciboRequest
     */
    public function setNifEmitente($nifEmitente = null)
    {
        // validation for constraint: int
        if (!is_null($nifEmitente) && !(is_int($nifEmitente) || ctype_digit($nifEmitente))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nifEmitente, true), gettype($nifEmitente)), __LINE__);
        }
        // validation for constraint: pattern(\d{9})
        if (!is_null($nifEmitente) && !preg_match('/\\d{9}/', $nifEmitente)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{9}', var_export($nifEmitente, true)), __LINE__);
        }
        $this->nifEmitente = $nifEmitente;
        return $this;
    }
    /**
     * Get locadores value
     * @return \StructType\Locadores
     */
    public function getLocadores()
    {
        return $this->locadores;
    }
    /**
     * Set locadores value
     * @param \StructType\Locadores $locadores
     * @return \StructType\EmitirReciboRequest
     */
    public function setLocadores(\StructType\Locadores $locadores = null)
    {
        $this->locadores = $locadores;
        return $this;
    }
    /**
     * Get locatarios value
     * @return \StructType\Locatarios
     */
    public function getLocatarios()
    {
        return $this->locatarios;
    }
    /**
     * Set locatarios value
     * @param \StructType\Locatarios $locatarios
     * @return \StructType\EmitirReciboRequest
     */
    public function setLocatarios(\StructType\Locatarios $locatarios = null)
    {
        $this->locatarios = $locatarios;
        return $this;
    }
    /**
     * Get tipo value
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
    /**
     * Set tipo value
     * @uses \EnumType\Tipo::valueIsValid()
     * @uses \EnumType\Tipo::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipo
     * @return \StructType\EmitirReciboRequest
     */
    public function setTipo($tipo = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Tipo::valueIsValid($tipo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Tipo', is_array($tipo) ? implode(', ', $tipo) : var_export($tipo, true), implode(', ', \EnumType\Tipo::getValidValues())), __LINE__);
        }
        $this->tipo = $tipo;
        return $this;
    }
    /**
     * Get dataInicio value
     * @return string
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }
    /**
     * Set dataInicio value
     * @param string $dataInicio
     * @return \StructType\EmitirReciboRequest
     */
    public function setDataInicio($dataInicio = null)
    {
        // validation for constraint: string
        if (!is_null($dataInicio) && !is_string($dataInicio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataInicio, true), gettype($dataInicio)), __LINE__);
        }
        $this->dataInicio = $dataInicio;
        return $this;
    }
    /**
     * Get dataFim value
     * @return string
     */
    public function getDataFim()
    {
        return $this->dataFim;
    }
    /**
     * Set dataFim value
     * @param string $dataFim
     * @return \StructType\EmitirReciboRequest
     */
    public function setDataFim($dataFim = null)
    {
        // validation for constraint: string
        if (!is_null($dataFim) && !is_string($dataFim)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataFim, true), gettype($dataFim)), __LINE__);
        }
        $this->dataFim = $dataFim;
        return $this;
    }
    /**
     * Get tipoImportancia value
     * @return string
     */
    public function getTipoImportancia()
    {
        return $this->tipoImportancia;
    }
    /**
     * Set tipoImportancia value
     * @uses \EnumType\TipoImportancia::valueIsValid()
     * @uses \EnumType\TipoImportancia::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoImportancia
     * @return \StructType\EmitirReciboRequest
     */
    public function setTipoImportancia($tipoImportancia = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TipoImportancia::valueIsValid($tipoImportancia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TipoImportancia', is_array($tipoImportancia) ? implode(', ', $tipoImportancia) : var_export($tipoImportancia, true), implode(', ', \EnumType\TipoImportancia::getValidValues())), __LINE__);
        }
        $this->tipoImportancia = $tipoImportancia;
        return $this;
    }
    /**
     * Get valor value
     * @return float
     */
    public function getValor()
    {
        return $this->valor;
    }
    /**
     * Set valor value
     * @param float $valor
     * @return \StructType\EmitirReciboRequest
     */
    public function setValor($valor = null)
    {
        // validation for constraint: float
        if (!is_null($valor) && !(is_float($valor) || is_numeric($valor))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valor, true), gettype($valor)), __LINE__);
        }
        $this->valor = $valor;
        return $this;
    }
    /**
     * Get dataRecebimento value
     * @return string
     */
    public function getDataRecebimento()
    {
        return $this->dataRecebimento;
    }
    /**
     * Set dataRecebimento value
     * @param string $dataRecebimento
     * @return \StructType\EmitirReciboRequest
     */
    public function setDataRecebimento($dataRecebimento = null)
    {
        // validation for constraint: string
        if (!is_null($dataRecebimento) && !is_string($dataRecebimento)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataRecebimento, true), gettype($dataRecebimento)), __LINE__);
        }
        $this->dataRecebimento = $dataRecebimento;
        return $this;
    }
    /**
     * Get herdeiros value
     * @return \StructType\Herdeiros|null
     */
    public function getHerdeiros()
    {
        return $this->herdeiros;
    }
    /**
     * Set herdeiros value
     * @param \StructType\Herdeiros $herdeiros
     * @return \StructType\EmitirReciboRequest
     */
    public function setHerdeiros(\StructType\Herdeiros $herdeiros = null)
    {
        $this->herdeiros = $herdeiros;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\EmitirReciboRequest
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
