<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for locadorPrevio StructType
 * @subpackage Structs
 */
class LocadorPrevio extends AbstractStructBase
{
    /**
     * The nif
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: \d{9}
     * @var int
     */
    public $nif;
    /**
     * Constructor method for locadorPrevio
     * @uses LocadorPrevio::setNif()
     * @param int $nif
     */
    public function __construct($nif = null)
    {
        $this
            ->setNif($nif);
    }
    /**
     * Get nif value
     * @return int
     */
    public function getNif()
    {
        return $this->nif;
    }
    /**
     * Set nif value
     * @param int $nif
     * @return \StructType\LocadorPrevio
     */
    public function setNif($nif = null)
    {
        // validation for constraint: int
        if (!is_null($nif) && !(is_int($nif) || ctype_digit($nif))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nif, true), gettype($nif)), __LINE__);
        }
        // validation for constraint: pattern(\d{9})
        if (!is_null($nif) && !preg_match('/\\d{9}/', $nif)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{9}', var_export($nif, true)), __LINE__);
        }
        $this->nif = $nif;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\LocadorPrevio
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
