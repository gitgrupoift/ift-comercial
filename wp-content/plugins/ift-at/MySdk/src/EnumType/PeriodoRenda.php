<?php

namespace EnumType;

/**
 * This class stands for periodoRenda EnumType
 * @subpackage Enumerations
 */
class PeriodoRenda
{
    /**
     * Constant for value 'MENSAL'
     * Meta information extracted from the WSDL
     * - documentation: Mensal
     * @return string 'MENSAL'
     */
    const VALUE_MENSAL = 'MENSAL';
    /**
     * Constant for value 'MENORM'
     * Meta information extracted from the WSDL
     * - documentation: Inferior a um mês
     * @return string 'MENORM'
     */
    const VALUE_MENORM = 'MENORM';
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
     * @uses self::VALUE_MENSAL
     * @uses self::VALUE_MENORM
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MENSAL,
            self::VALUE_MENORM,
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
