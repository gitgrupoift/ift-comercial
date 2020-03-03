<?php

namespace EnumType;

/**
 * This class stands for tipo EnumType
 * @subpackage Enumerations
 */
class Tipo
{
    /**
     * Constant for value 'ARREND'
     * Meta information extracted from the WSDL
     * - documentation: Arrendamento | Arrendamento
     * @return string 'ARREND'
     */
    const VALUE_ARREND = 'ARREND';
    /**
     * Constant for value 'SUBARR'
     * Meta information extracted from the WSDL
     * - documentation: Subarrendamento | Subarrendamento
     * @return string 'SUBARR'
     */
    const VALUE_SUBARR = 'SUBARR';
    /**
     * Constant for value 'PROMES'
     * Meta information extracted from the WSDL
     * - documentation: Promessa arrendamento com entrega do bem locado
     * @return string 'PROMES'
     */
    const VALUE_PROMES = 'PROMES';
    /**
     * Constant for value 'CEDENC'
     * Meta information extracted from the WSDL
     * - documentation: Cedencia de uso do prédio ou de parte dele, que não arrendamento | Cedencia de uso do prédio ou de parte dele, que não arrendamento
     * @return string 'CEDENC'
     */
    const VALUE_CEDENC = 'CEDENC';
    /**
     * Constant for value 'ALUGUE'
     * Meta information extracted from the WSDL
     * - documentation: Aluguer de maquinismos e mobiliário instalados no imóvel locado | Aluguer de maquinismos e mobiliário instalados no imóvel locado
     * @return string 'ALUGUE'
     */
    const VALUE_ALUGUE = 'ALUGUE';
    /**
     * Constant for value 'U'
     * Meta information extracted from the WSDL
     * - documentation: Urbano
     * @return string 'U'
     */
    const VALUE_U = 'U';
    /**
     * Constant for value 'R'
     * Meta information extracted from the WSDL
     * - documentation: Rústico
     * @return string 'R'
     */
    const VALUE_R = 'R';
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
     * @uses self::VALUE_ARREND
     * @uses self::VALUE_SUBARR
     * @uses self::VALUE_PROMES
     * @uses self::VALUE_CEDENC
     * @uses self::VALUE_ALUGUE
     * @uses self::VALUE_U
     * @uses self::VALUE_R
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ARREND,
            self::VALUE_SUBARR,
            self::VALUE_PROMES,
            self::VALUE_CEDENC,
            self::VALUE_ALUGUE,
            self::VALUE_U,
            self::VALUE_R,
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
