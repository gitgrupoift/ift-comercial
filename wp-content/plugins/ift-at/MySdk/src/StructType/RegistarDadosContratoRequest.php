<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for registarDadosContratoRequest StructType
 * @subpackage Structs
 */
class RegistarDadosContratoRequest extends AbstractStructBase
{
    /**
     * The nifDeclarante
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: \d{9}
     * @var int
     */
    public $nifDeclarante;
    /**
     * The referencia
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 40
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $referencia;
    /**
     * The tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $tipo;
    /**
     * The finalidade
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $finalidade;
    /**
     * The dataInicio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $dataInicio;
    /**
     * The imoveis
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \StructType\Imoveis
     */
    public $imoveis;
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
     * The valorRenda
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    public $valorRenda;
    /**
     * The periodoRenda
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $periodoRenda;
    /**
     * The dataTermo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $dataTermo;
    /**
     * The renovavel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $renovavel;
    /**
     * The valorDespesas
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $valorDespesas;
    /**
     * The valorRendaMaxima
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $valorRendaMaxima;
    /**
     * The locadoresPrevios
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\LocadoresPrevios
     */
    public $locadoresPrevios;
    /**
     * The observacoes
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3000
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $observacoes;
    /**
     * The nifAutorizado
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: \d{9}
     * @var int
     */
    public $nifAutorizado;
    /**
     * Constructor method for registarDadosContratoRequest
     * @uses RegistarDadosContratoRequest::setNifDeclarante()
     * @uses RegistarDadosContratoRequest::setReferencia()
     * @uses RegistarDadosContratoRequest::setTipo()
     * @uses RegistarDadosContratoRequest::setFinalidade()
     * @uses RegistarDadosContratoRequest::setDataInicio()
     * @uses RegistarDadosContratoRequest::setImoveis()
     * @uses RegistarDadosContratoRequest::setLocadores()
     * @uses RegistarDadosContratoRequest::setLocatarios()
     * @uses RegistarDadosContratoRequest::setValorRenda()
     * @uses RegistarDadosContratoRequest::setPeriodoRenda()
     * @uses RegistarDadosContratoRequest::setDataTermo()
     * @uses RegistarDadosContratoRequest::setRenovavel()
     * @uses RegistarDadosContratoRequest::setValorDespesas()
     * @uses RegistarDadosContratoRequest::setValorRendaMaxima()
     * @uses RegistarDadosContratoRequest::setLocadoresPrevios()
     * @uses RegistarDadosContratoRequest::setObservacoes()
     * @uses RegistarDadosContratoRequest::setNifAutorizado()
     * @param int $nifDeclarante
     * @param string $referencia
     * @param string $tipo
     * @param string $finalidade
     * @param string $dataInicio
     * @param \StructType\Imoveis $imoveis
     * @param \StructType\Locadores $locadores
     * @param \StructType\Locatarios $locatarios
     * @param float $valorRenda
     * @param string $periodoRenda
     * @param string $dataTermo
     * @param bool $renovavel
     * @param float $valorDespesas
     * @param float $valorRendaMaxima
     * @param \StructType\LocadoresPrevios $locadoresPrevios
     * @param string $observacoes
     * @param int $nifAutorizado
     */
    public function __construct($nifDeclarante = null, $referencia = null, $tipo = null, $finalidade = null, $dataInicio = null, \StructType\Imoveis $imoveis = null, \StructType\Locadores $locadores = null, \StructType\Locatarios $locatarios = null, $valorRenda = null, $periodoRenda = null, $dataTermo = null, $renovavel = null, $valorDespesas = null, $valorRendaMaxima = null, \StructType\LocadoresPrevios $locadoresPrevios = null, $observacoes = null, $nifAutorizado = null)
    {
        $this
            ->setNifDeclarante($nifDeclarante)
            ->setReferencia($referencia)
            ->setTipo($tipo)
            ->setFinalidade($finalidade)
            ->setDataInicio($dataInicio)
            ->setImoveis($imoveis)
            ->setLocadores($locadores)
            ->setLocatarios($locatarios)
            ->setValorRenda($valorRenda)
            ->setPeriodoRenda($periodoRenda)
            ->setDataTermo($dataTermo)
            ->setRenovavel($renovavel)
            ->setValorDespesas($valorDespesas)
            ->setValorRendaMaxima($valorRendaMaxima)
            ->setLocadoresPrevios($locadoresPrevios)
            ->setObservacoes($observacoes)
            ->setNifAutorizado($nifAutorizado);
    }
    /**
     * Get nifDeclarante value
     * @return int
     */
    public function getNifDeclarante()
    {
        return $this->nifDeclarante;
    }
    /**
     * Set nifDeclarante value
     * @param int $nifDeclarante
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setNifDeclarante($nifDeclarante = null)
    {
        // validation for constraint: int
        if (!is_null($nifDeclarante) && !(is_int($nifDeclarante) || ctype_digit($nifDeclarante))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nifDeclarante, true), gettype($nifDeclarante)), __LINE__);
        }
        // validation for constraint: pattern(\d{9})
        if (!is_null($nifDeclarante) && !preg_match('/\\d{9}/', $nifDeclarante)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{9}', var_export($nifDeclarante, true)), __LINE__);
        }
        $this->nifDeclarante = $nifDeclarante;
        return $this;
    }
    /**
     * Get referencia value
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }
    /**
     * Set referencia value
     * @param string $referencia
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setReferencia($referencia = null)
    {
        // validation for constraint: string
        if (!is_null($referencia) && !is_string($referencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencia, true), gettype($referencia)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($referencia) && mb_strlen($referencia) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($referencia)), __LINE__);
        }
        $this->referencia = $referencia;
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
     * @return \StructType\RegistarDadosContratoRequest
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
     * Get finalidade value
     * @return string
     */
    public function getFinalidade()
    {
        return $this->finalidade;
    }
    /**
     * Set finalidade value
     * @uses \EnumType\Finalidade::valueIsValid()
     * @uses \EnumType\Finalidade::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $finalidade
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setFinalidade($finalidade = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Finalidade::valueIsValid($finalidade)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Finalidade', is_array($finalidade) ? implode(', ', $finalidade) : var_export($finalidade, true), implode(', ', \EnumType\Finalidade::getValidValues())), __LINE__);
        }
        $this->finalidade = $finalidade;
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
     * @return \StructType\RegistarDadosContratoRequest
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
     * Get imoveis value
     * @return \StructType\Imoveis
     */
    public function getImoveis()
    {
        return $this->imoveis;
    }
    /**
     * Set imoveis value
     * @param \StructType\Imoveis $imoveis
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setImoveis(\StructType\Imoveis $imoveis = null)
    {
        $this->imoveis = $imoveis;
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
     * @return \StructType\RegistarDadosContratoRequest
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
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setLocatarios(\StructType\Locatarios $locatarios = null)
    {
        $this->locatarios = $locatarios;
        return $this;
    }
    /**
     * Get valorRenda value
     * @return float
     */
    public function getValorRenda()
    {
        return $this->valorRenda;
    }
    /**
     * Set valorRenda value
     * @param float $valorRenda
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setValorRenda($valorRenda = null)
    {
        // validation for constraint: float
        if (!is_null($valorRenda) && !(is_float($valorRenda) || is_numeric($valorRenda))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorRenda, true), gettype($valorRenda)), __LINE__);
        }
        $this->valorRenda = $valorRenda;
        return $this;
    }
    /**
     * Get periodoRenda value
     * @return string
     */
    public function getPeriodoRenda()
    {
        return $this->periodoRenda;
    }
    /**
     * Set periodoRenda value
     * @uses \EnumType\PeriodoRenda::valueIsValid()
     * @uses \EnumType\PeriodoRenda::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $periodoRenda
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setPeriodoRenda($periodoRenda = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PeriodoRenda::valueIsValid($periodoRenda)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PeriodoRenda', is_array($periodoRenda) ? implode(', ', $periodoRenda) : var_export($periodoRenda, true), implode(', ', \EnumType\PeriodoRenda::getValidValues())), __LINE__);
        }
        $this->periodoRenda = $periodoRenda;
        return $this;
    }
    /**
     * Get dataTermo value
     * @return string|null
     */
    public function getDataTermo()
    {
        return $this->dataTermo;
    }
    /**
     * Set dataTermo value
     * @param string $dataTermo
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setDataTermo($dataTermo = null)
    {
        // validation for constraint: string
        if (!is_null($dataTermo) && !is_string($dataTermo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataTermo, true), gettype($dataTermo)), __LINE__);
        }
        $this->dataTermo = $dataTermo;
        return $this;
    }
    /**
     * Get renovavel value
     * @return bool|null
     */
    public function getRenovavel()
    {
        return $this->renovavel;
    }
    /**
     * Set renovavel value
     * @param bool $renovavel
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setRenovavel($renovavel = null)
    {
        // validation for constraint: boolean
        if (!is_null($renovavel) && !is_bool($renovavel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($renovavel, true), gettype($renovavel)), __LINE__);
        }
        $this->renovavel = $renovavel;
        return $this;
    }
    /**
     * Get valorDespesas value
     * @return float|null
     */
    public function getValorDespesas()
    {
        return $this->valorDespesas;
    }
    /**
     * Set valorDespesas value
     * @param float $valorDespesas
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setValorDespesas($valorDespesas = null)
    {
        // validation for constraint: float
        if (!is_null($valorDespesas) && !(is_float($valorDespesas) || is_numeric($valorDespesas))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorDespesas, true), gettype($valorDespesas)), __LINE__);
        }
        $this->valorDespesas = $valorDespesas;
        return $this;
    }
    /**
     * Get valorRendaMaxima value
     * @return float|null
     */
    public function getValorRendaMaxima()
    {
        return $this->valorRendaMaxima;
    }
    /**
     * Set valorRendaMaxima value
     * @param float $valorRendaMaxima
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setValorRendaMaxima($valorRendaMaxima = null)
    {
        // validation for constraint: float
        if (!is_null($valorRendaMaxima) && !(is_float($valorRendaMaxima) || is_numeric($valorRendaMaxima))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valorRendaMaxima, true), gettype($valorRendaMaxima)), __LINE__);
        }
        $this->valorRendaMaxima = $valorRendaMaxima;
        return $this;
    }
    /**
     * Get locadoresPrevios value
     * @return \StructType\LocadoresPrevios|null
     */
    public function getLocadoresPrevios()
    {
        return $this->locadoresPrevios;
    }
    /**
     * Set locadoresPrevios value
     * @param \StructType\LocadoresPrevios $locadoresPrevios
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setLocadoresPrevios(\StructType\LocadoresPrevios $locadoresPrevios = null)
    {
        $this->locadoresPrevios = $locadoresPrevios;
        return $this;
    }
    /**
     * Get observacoes value
     * @return string|null
     */
    public function getObservacoes()
    {
        return $this->observacoes;
    }
    /**
     * Set observacoes value
     * @param string $observacoes
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setObservacoes($observacoes = null)
    {
        // validation for constraint: string
        if (!is_null($observacoes) && !is_string($observacoes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($observacoes, true), gettype($observacoes)), __LINE__);
        }
        // validation for constraint: maxLength(3000)
        if (!is_null($observacoes) && mb_strlen($observacoes) > 3000) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3000', mb_strlen($observacoes)), __LINE__);
        }
        $this->observacoes = $observacoes;
        return $this;
    }
    /**
     * Get nifAutorizado value
     * @return int|null
     */
    public function getNifAutorizado()
    {
        return $this->nifAutorizado;
    }
    /**
     * Set nifAutorizado value
     * @param int $nifAutorizado
     * @return \StructType\RegistarDadosContratoRequest
     */
    public function setNifAutorizado($nifAutorizado = null)
    {
        // validation for constraint: int
        if (!is_null($nifAutorizado) && !(is_int($nifAutorizado) || ctype_digit($nifAutorizado))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nifAutorizado, true), gettype($nifAutorizado)), __LINE__);
        }
        // validation for constraint: pattern(\d{9})
        if (!is_null($nifAutorizado) && !preg_match('/\\d{9}/', $nifAutorizado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{9}', var_export($nifAutorizado, true)), __LINE__);
        }
        $this->nifAutorizado = $nifAutorizado;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RegistarDadosContratoRequest
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
