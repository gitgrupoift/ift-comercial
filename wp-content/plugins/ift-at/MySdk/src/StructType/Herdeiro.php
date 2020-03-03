<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for herdeiro StructType
 * @subpackage Structs
 */
class Herdeiro extends AbstractStructBase
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
     * The quotaParte
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: \d(\d{0,5}/\d{1,6})?
     * @var string
     */
    public $quotaParte;
    /**
     * The nifHeranca
     * Meta information extracted from the WSDL
     * - base: xs:int
     * - maxOccurs: 1
     * - minOccurs: 1
     * - pattern: \d{9}
     * @var int
     */
    public $nifHeranca;
    /**
     * Constructor method for herdeiro
     * @uses Herdeiro::setNif()
     * @uses Herdeiro::setQuotaParte()
     * @uses Herdeiro::setNifHeranca()
     * @param int $nif
     * @param string $quotaParte
     * @param int $nifHeranca
     */
    public function __construct($nif = null, $quotaParte = null, $nifHeranca = null)
    {
        $this
            ->setNif($nif)
            ->setQuotaParte($quotaParte)
            ->setNifHeranca($nifHeranca);
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
     * @return \StructType\Herdeiro
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
     * Get quotaParte value
     * @return string
     */
    public function getQuotaParte()
    {
        return $this->quotaParte;
    }
    /**
     * Set quotaParte value
     * @param string $quotaParte
     * @return \StructType\Herdeiro
     */
    public function setQuotaParte($quotaParte = null)
    {
        // validation for constraint: string
        if (!is_null($quotaParte) && !is_string($quotaParte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($quotaParte, true), gettype($quotaParte)), __LINE__);
        }
        // validation for constraint: pattern(\d(\d{0,5}/\d{1,6})?)
        if (!is_null($quotaParte) && !preg_match('/\\d(\\d{0,5}\/\\d{1,6})?/', $quotaParte)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d(\d{0,5}/\d{1,6})?', var_export($quotaParte, true)), __LINE__);
        }
        $this->quotaParte = $quotaParte;
        return $this;
    }
    /**
     * Get nifHeranca value
     * @return int
     */
    public function getNifHeranca()
    {
        return $this->nifHeranca;
    }
    /**
     * Set nifHeranca value
     * @param int $nifHeranca
     * @return \StructType\Herdeiro
     */
    public function setNifHeranca($nifHeranca = null)
    {
        // validation for constraint: int
        if (!is_null($nifHeranca) && !(is_int($nifHeranca) || ctype_digit($nifHeranca))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nifHeranca, true), gettype($nifHeranca)), __LINE__);
        }
        // validation for constraint: pattern(\d{9})
        if (!is_null($nifHeranca) && !preg_match('/\\d{9}/', $nifHeranca)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{9}', var_export($nifHeranca, true)), __LINE__);
        }
        $this->nifHeranca = $nifHeranca;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Herdeiro
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
