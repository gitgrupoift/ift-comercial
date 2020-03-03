<?php

namespace EnumType;

/**
 * This class stands for retencaoFonte EnumType
 * @subpackage Enumerations
 */
class RetencaoFonte
{
    /**
     * Constant for value 'RIRS01'
     * Meta information extracted from the WSDL
     * - documentation: À taxa de 25% - artigo 101.º, n.º 1, al. e) do CIRS | À taxa de 25% - artigo 101.º, n.º 1, al. e) do CIRS
     * @return string 'RIRS01'
     */
    const VALUE_RIRS_01 = 'RIRS01';
    /**
     * Constant for value 'RIRS02'
     * Meta information extracted from the WSDL
     * - documentation: À taxa de 20% (Açores DLR n.º 2/99/A, de 20/01, após 1-01-2014) | À taxa de 20% (Açores DLR n.º 2/99/A, de 20/01, após 1-01-2014)
     * @return string 'RIRS02'
     */
    const VALUE_RIRS_02 = 'RIRS02';
    /**
     * Constant for value 'RIRS03'
     * Meta information extracted from the WSDL
     * - documentation: Dispensa de retenção - artigo 101.º-B, n.º 1, do CIRS | Dispensa de retenção - artigo 101.º-B, n.º 1, do CIRS
     * @return string 'RIRS03'
     */
    const VALUE_RIRS_03 = 'RIRS03';
    /**
     * Constant for value 'RIRS04'
     * Meta information extracted from the WSDL
     * - documentation: Sem retenção - artigo 101.º, n.º 1, do CIRS | Sem retenção - artigo 101.º, n.º 1, do CIRS
     * @return string 'RIRS04'
     */
    const VALUE_RIRS_04 = 'RIRS04';
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
     * @uses self::VALUE_RIRS_01
     * @uses self::VALUE_RIRS_02
     * @uses self::VALUE_RIRS_03
     * @uses self::VALUE_RIRS_04
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_RIRS_01,
            self::VALUE_RIRS_02,
            self::VALUE_RIRS_03,
            self::VALUE_RIRS_04,
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
