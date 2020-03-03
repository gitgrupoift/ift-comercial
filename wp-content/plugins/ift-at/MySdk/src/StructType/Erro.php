<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for erro StructType
 * @subpackage Structs
 */
class Erro extends AbstractStructBase
{
    /**
     * The mensagem
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $mensagem;
    /**
     * The campo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $campo;
    /**
     * Constructor method for erro
     * @uses Erro::setMensagem()
     * @uses Erro::setCampo()
     * @param string $mensagem
     * @param string $campo
     */
    public function __construct($mensagem = null, $campo = null)
    {
        $this
            ->setMensagem($mensagem)
            ->setCampo($campo);
    }
    /**
     * Get mensagem value
     * @return string
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }
    /**
     * Set mensagem value
     * @param string $mensagem
     * @return \StructType\Erro
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
     * Get campo value
     * @return string|null
     */
    public function getCampo()
    {
        return $this->campo;
    }
    /**
     * Set campo value
     * @param string $campo
     * @return \StructType\Erro
     */
    public function setCampo($campo = null)
    {
        // validation for constraint: string
        if (!is_null($campo) && !is_string($campo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($campo, true), gettype($campo)), __LINE__);
        }
        $this->campo = $campo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Erro
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
