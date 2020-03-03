<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for emitirReciboResponse StructType
 * @subpackage Structs
 */
class EmitirReciboResponse extends AbstractStructBase
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
     * The numeroRecibo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int
     */
    public $numeroRecibo;
    /**
     * The erros
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\Erros
     */
    public $erros;
    /**
     * Constructor method for emitirReciboResponse
     * @uses EmitirReciboResponse::setCodigo()
     * @uses EmitirReciboResponse::setMensagem()
     * @uses EmitirReciboResponse::setNumeroRecibo()
     * @uses EmitirReciboResponse::setErros()
     * @param int $codigo
     * @param string $mensagem
     * @param int $numeroRecibo
     * @param \StructType\Erros $erros
     */
    public function __construct($codigo = null, $mensagem = null, $numeroRecibo = null, \StructType\Erros $erros = null)
    {
        $this
            ->setCodigo($codigo)
            ->setMensagem($mensagem)
            ->setNumeroRecibo($numeroRecibo)
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
     * @return \StructType\EmitirReciboResponse
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
     * @return \StructType\EmitirReciboResponse
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
     * Get numeroRecibo value
     * @return int|null
     */
    public function getNumeroRecibo()
    {
        return $this->numeroRecibo;
    }
    /**
     * Set numeroRecibo value
     * @param int $numeroRecibo
     * @return \StructType\EmitirReciboResponse
     */
    public function setNumeroRecibo($numeroRecibo = null)
    {
        // validation for constraint: int
        if (!is_null($numeroRecibo) && !(is_int($numeroRecibo) || ctype_digit($numeroRecibo))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numeroRecibo, true), gettype($numeroRecibo)), __LINE__);
        }
        $this->numeroRecibo = $numeroRecibo;
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
     * @return \StructType\EmitirReciboResponse
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
     * @return \StructType\EmitirReciboResponse
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
