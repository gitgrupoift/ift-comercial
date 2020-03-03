<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for locadores StructType
 * @subpackage Structs
 */
class Locadores extends AbstractStructBase
{
    /**
     * The locador
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Locador[]
     */
    public $locador;
    /**
     * Constructor method for locadores
     * @uses Locadores::setLocador()
     * @param \StructType\Locador[] $locador
     */
    public function __construct(array $locador = array())
    {
        $this
            ->setLocador($locador);
    }
    /**
     * Get locador value
     * @return \StructType\Locador[]
     */
    public function getLocador()
    {
        return $this->locador;
    }
    /**
     * This method is responsible for validating the values passed to the setLocador method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLocador method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLocadorForArrayConstraintsFromSetLocador(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $locadoresLocadorItem) {
            // validation for constraint: itemType
            if (!$locadoresLocadorItem instanceof \StructType\Locador) {
                $invalidValues[] = is_object($locadoresLocadorItem) ? get_class($locadoresLocadorItem) : sprintf('%s(%s)', gettype($locadoresLocadorItem), var_export($locadoresLocadorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The locador property can only contain items of type \StructType\Locador, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set locador value
     * @throws \InvalidArgumentException
     * @param \StructType\Locador[] $locador
     * @return \StructType\Locadores
     */
    public function setLocador(array $locador = array())
    {
        // validation for constraint: array
        if ('' !== ($locadorArrayErrorMessage = self::validateLocadorForArrayConstraintsFromSetLocador($locador))) {
            throw new \InvalidArgumentException($locadorArrayErrorMessage, __LINE__);
        }
        $this->locador = $locador;
        return $this;
    }
    /**
     * Add item to locador value
     * @throws \InvalidArgumentException
     * @param \StructType\Locador $item
     * @return \StructType\Locadores
     */
    public function addToLocador(\StructType\Locador $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Locador) {
            throw new \InvalidArgumentException(sprintf('The locador property can only contain items of type \StructType\Locador, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->locador[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Locadores
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
