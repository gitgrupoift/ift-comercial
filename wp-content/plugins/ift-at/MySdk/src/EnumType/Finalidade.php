<?php

namespace EnumType;

/**
 * This class stands for finalidade EnumType
 * @subpackage Enumerations
 */
class Finalidade
{
    /**
     * Constant for value 'H_PERM'
     * Meta information extracted from the WSDL
     * - documentation: Habitacional (Permanente)
     * @return string 'H_PERM'
     */
    const VALUE_H_PERM = 'H_PERM';
    /**
     * Constant for value 'H_NPER'
     * Meta information extracted from the WSDL
     * - documentation: Habitacional (Não Permanente)
     * @return string 'H_NPER'
     */
    const VALUE_H_NPER = 'H_NPER';
    /**
     * Constant for value 'N_HABI'
     * Meta information extracted from the WSDL
     * - documentation: Não Habitacional
     * @return string 'N_HABI'
     */
    const VALUE_N_HABI = 'N_HABI';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_H_PERM
     * @uses self::VALUE_H_NPER
     * @uses self::VALUE_N_HABI
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_H_PERM,
            self::VALUE_H_NPER,
            self::VALUE_N_HABI,
        );
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
