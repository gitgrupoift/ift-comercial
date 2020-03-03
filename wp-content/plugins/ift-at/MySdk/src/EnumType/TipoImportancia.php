<?php

namespace EnumType;

/**
 * This class stands for tipoImportancia EnumType
 * @subpackage Enumerations
 */
class TipoImportancia
{
    /**
     * Constant for value 'RENDAC'
     * Meta information extracted from the WSDL
     * - documentation: Renda
     * @return string 'RENDAC'
     */
    const VALUE_RENDAC = 'RENDAC';
    /**
     * Constant for value 'CAUCAO'
     * Meta information extracted from the WSDL
     * - documentation: Caução
     * @return string 'CAUCAO'
     */
    const VALUE_CAUCAO = 'CAUCAO';
    /**
     * Constant for value 'ADIANT'
     * Meta information extracted from the WSDL
     * - documentation: Adiantamento
     * @return string 'ADIANT'
     */
    const VALUE_ADIANT = 'ADIANT';
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
     * @uses self::VALUE_RENDAC
     * @uses self::VALUE_CAUCAO
     * @uses self::VALUE_ADIANT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RENDAC,
            self::VALUE_CAUCAO,
            self::VALUE_ADIANT,
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
