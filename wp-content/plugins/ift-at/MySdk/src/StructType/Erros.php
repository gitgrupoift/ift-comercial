<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for erros StructType
 * @subpackage Structs
 */
class Erros extends AbstractStructBase
{
    /**
     * The erro
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * @var \StructType\Erro[]
     */
    public $erro;
    /**
     * Constructor method for erros
     * @uses Erros::setErro()
     * @param \StructType\Erro[] $erro
     */
    public function __construct(array $erro = array())
    {
        $this
            ->setErro($erro);
    }
    /**
     * Get erro value
     * @return \StructType\Erro[]
     */
    public function getErro()
    {
        return $this->erro;
    }
    /**
     * This method is responsible for validating the values passed to the setErro method
     * This method is willingly generated in order to preserve the one-line inline validation within the setErro method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateErroForArrayConstraintsFromSetErro(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $errosErroItem) {
            // validation for constraint: itemType
            if (!$errosErroItem instanceof \StructType\Erro) {
                $invalidValues[] = is_object($errosErroItem) ? get_class($errosErroItem) : sprintf('%s(%s)', gettype($errosErroItem), var_export($errosErroItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The erro property can only contain items of type \StructType\Erro, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set erro value
     * @throws \InvalidArgumentException
     * @param \StructType\Erro[] $erro
     * @return \StructType\Erros
     */
    public function setErro(array $erro = array())
    {
        // validation for constraint: array
        if ('' !== ($erroArrayErrorMessage = self::validateErroForArrayConstraintsFromSetErro($erro))) {
            throw new \InvalidArgumentException($erroArrayErrorMessage, __LINE__);
        }
        $this->erro = $erro;
        return $this;
    }
    /**
     * Add item to erro value
     * @throws \InvalidArgumentException
     * @param \StructType\Erro $item
     * @return \StructType\Erros
     */
    public function addToErro(\StructType\Erro $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Erro) {
            throw new \InvalidArgumentException(sprintf('The erro property can only contain items of type \StructType\Erro, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->erro[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Erros
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
