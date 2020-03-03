<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for registarDadosContratoResponse StructType
 * @subpackage Structs
 */
class RegistarDadosContratoResponse extends AbstractStructBase
{
    /**
     * The codigo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $codigo;
    /**
     * The mensagem
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $mensagem;
    /**
     * The numeroContrato
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $numeroContrato;
    /**
     * The erros
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Erros
     */
    public $erros;
    /**
     * Constructor method for registarDadosContratoResponse
     * @uses RegistarDadosContratoResponse::setCodigo()
     * @uses RegistarDadosContratoResponse::setMensagem()
     * @uses RegistarDadosContratoResponse::setNumeroContrato()
     * @uses RegistarDadosContratoResponse::setErros()
     * @param int $codigo
     * @param string $mensagem
     * @param int $numeroContrato
     * @param \StructType\Erros $erros
     */
    public function __construct($codigo = null, $mensagem = null, $numeroContrato = null, \StructType\Erros $erros = null)
    {
        $this
            ->setCodigo($codigo)
            ->setMensagem($mensagem)
            ->setNumeroContrato($numeroContrato)
            ->setErros($erros);
    }
    /**
     * Get codigo value
     * @return int
     */
    public function getCodigo()
    {
        return $this->codigo;
    }
    /**
     * Set codigo value
     * @param int $codigo
     * @return \StructType\RegistarDadosContratoResponse
     */
    public function setCodigo($codigo = null)
    {
        // validation for constraint: int
        if (!is_null($codigo) && !(is_int($codigo) || ctype_digit($codigo))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigo, true), gettype($codigo)), __LINE__);
        }
        $this->codigo = $codigo;
        return $this;
    }
    /**
     * Get mensagem value
     * @return string|null
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }
    /**
     * Set mensagem value
     * @param string $mensagem
     * @return \StructType\RegistarDadosContratoResponse
     */
    public function setMensagem($mensagem = null)
    {
        // validation for constraint: string
        if (!is_null($mensagem) && !is_string($mensagem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mensagem, true), gettype($mensagem)), __LINE__);
        }
        $this->mensagem = $mensagem;
        return $this;
    }
    /**
     * Get numeroContrato value
     * @return int|null
     */
    public function getNumeroContrato()
    {
        return $this->numeroContrato;
    }
    /**
     * Set numeroContrato value
     * @param int $numeroContrato
     * @return \StructType\RegistarDadosContratoResponse
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
     * Get erros value
     * @return \StructType\Erros|null
     */
    public function getErros()
    {
        return $this->erros;
    }
    /**
     * Set erros value
     * @param \StructType\Erros $erros
     * @return \StructType\RegistarDadosContratoResponse
     */
    public function setErros(\StructType\Erros $erros = null)
    {
        $this->erros = $erros;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\RegistarDadosContratoResponse
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
