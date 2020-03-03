<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for imoveis StructType
 * @subpackage Structs
 */
class Imoveis extends AbstractStructBase
{
    /**
     * The imovel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Imovel[]
     */
    public $imovel;
    /**
     * Constructor method for imoveis
     * @uses Imoveis::setImovel()
     * @param \StructType\Imovel[] $imovel
     */
    public function __construct(array $imovel = array())
    {
        $this
            ->setImovel($imovel);
    }
    /**
     * Get imovel value
     * @return \StructType\Imovel[]
     */
    public function getImovel()
    {
        return $this->imovel;
    }
    /**
     * This method is responsible for validating the values passed to the setImovel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setImovel method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateImovelForArrayConstraintsFromSetImovel(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $imoveisImovelItem) {
            // validation for constraint: itemType
            if (!$imoveisImovelItem instanceof \StructType\Imovel) {
                $invalidValues[] = is_object($imoveisImovelItem) ? get_class($imoveisImovelItem) : sprintf('%s(%s)', gettype($imoveisImovelItem), var_export($imoveisImovelItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The imovel property can only contain items of type \StructType\Imovel, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set imovel value
     * @throws \InvalidArgumentException
     * @param \StructType\Imovel[] $imovel
     * @return \StructType\Imoveis
     */
    public function setImovel(array $imovel = array())
    {
        // validation for constraint: array
        if ('' !== ($imovelArrayErrorMessage = self::validateImovelForArrayConstraintsFromSetImovel($imovel))) {
            throw new \InvalidArgumentException($imovelArrayErrorMessage, __LINE__);
        }
        $this->imovel = $imovel;
        return $this;
    }
    /**
     * Add item to imovel value
     * @throws \InvalidArgumentException
     * @param \StructType\Imovel $item
     * @return \StructType\Imoveis
     */
    public function addToImovel(\StructType\Imovel $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Imovel) {
            throw new \InvalidArgumentException(sprintf('The imovel property can only contain items of type \StructType\Imovel, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->imovel[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Imoveis
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
