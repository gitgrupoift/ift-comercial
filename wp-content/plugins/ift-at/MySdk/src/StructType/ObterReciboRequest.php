<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for obterReciboRequest StructType
 * @subpackage Structs
 */
class ObterReciboRequest extends AbstractStructBase
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
     * The numeroRecibo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    public $numeroRecibo;
    /**
     * Constructor method for obterReciboRequest
     * @uses ObterReciboRequest::setNumeroContrato()
     * @uses ObterReciboRequest::setNumeroRecibo()
     * @param int $numeroContrato
     * @param int $numeroRecibo
     */
    public function __construct($numeroContrato = null, $numeroRecibo = null)
    {
        $this
            ->setNumeroContrato($numeroContrato)
            ->setNumeroRecibo($numeroRecibo);
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
     * @return \StructType\ObterReciboRequest
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
     * Get numeroRecibo value
     * @return int
     */
    public function getNumeroRecibo()
    {
        return $this->numeroRecibo;
    }
    /**
     * Set numeroRecibo value
     * @param int $numeroRecibo
     * @return \StructType\ObterReciboRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\ObterReciboRequest
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
