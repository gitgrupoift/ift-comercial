<?php

namespace EnumType;

/**
 * This class stands for regimeCasamento EnumType
 * @subpackage Enumerations
 */
class RegimeCasamento
{
    /**
     * Constant for value 'CO_GER'
     * Meta information extracted from the WSDL
     * - documentation: Comunhão Geral
     * @return string 'CO_GER'
     */
    const VALUE_CO_GER = 'CO_GER';
    /**
     * Constant for value 'CO_ADQ'
     * Meta information extracted from the WSDL
     * - documentation: Comunhão de Adquiridos
     * @return string 'CO_ADQ'
     */
    const VALUE_CO_ADQ = 'CO_ADQ';
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
     * @uses self::VALUE_CO_GER
     * @uses self::VALUE_CO_ADQ
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CO_GER,
            self::VALUE_CO_ADQ,
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
