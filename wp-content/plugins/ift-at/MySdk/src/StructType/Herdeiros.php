<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for herdeiros StructType
 * @subpackage Structs
 */
class Herdeiros extends AbstractStructBase
{
    /**
     * The herdeiro
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Herdeiro[]
     */
    public $herdeiro;
    /**
     * Constructor method for herdeiros
     * @uses Herdeiros::setHerdeiro()
     * @param \StructType\Herdeiro[] $herdeiro
     */
    public function __construct(array $herdeiro = array())
    {
        $this
            ->setHerdeiro($herdeiro);
    }
    /**
     * Get herdeiro value
     * @return \StructType\Herdeiro[]
     */
    public function getHerdeiro()
    {
        return $this->herdeiro;
    }
    /**
     * This method is responsible for validating the values passed to the setHerdeiro method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHerdeiro method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHerdeiroForArrayConstraintsFromSetHerdeiro(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $herdeirosHerdeiroItem) {
            // validation for constraint: itemType
            if (!$herdeirosHerdeiroItem instanceof \StructType\Herdeiro) {
                $invalidValues[] = is_object($herdeirosHerdeiroItem) ? get_class($herdeirosHerdeiroItem) : sprintf('%s(%s)', gettype($herdeirosHerdeiroItem), var_export($herdeirosHerdeiroItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The herdeiro property can only contain items of type \StructType\Herdeiro, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set herdeiro value
     * @throws \InvalidArgumentException
     * @param \StructType\Herdeiro[] $herdeiro
     * @return \StructType\Herdeiros
     */
    public function setHerdeiro(array $herdeiro = array())
    {
        // validation for constraint: array
        if ('' !== ($herdeiroArrayErrorMessage = self::validateHerdeiroForArrayConstraintsFromSetHerdeiro($herdeiro))) {
            throw new \InvalidArgumentException($herdeiroArrayErrorMessage, __LINE__);
        }
        $this->herdeiro = $herdeiro;
        return $this;
    }
    /**
     * Add item to herdeiro value
     * @throws \InvalidArgumentException
     * @param \StructType\Herdeiro $item
     * @return \StructType\Herdeiros
     */
    public function addToHerdeiro(\StructType\Herdeiro $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Herdeiro) {
            throw new \InvalidArgumentException(sprintf('The herdeiro property can only contain items of type \StructType\Herdeiro, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->herdeiro[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Herdeiros
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
