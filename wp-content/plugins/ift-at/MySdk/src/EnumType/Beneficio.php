<?php

namespace EnumType;

/**
 * This class stands for beneficio EnumType
 * @subpackage Enumerations
 */
class Beneficio
{
    /**
     * Constant for value 'BNF001'
     * Meta information extracted from the WSDL
     * - documentation: O Estado, as Regiões Autónomas, as autarquias locais e as associações e federações de municípios de direito público, e seus serviços, estabelecimentos e organismos, compreendidos os institutos públicos, que não tenham
     * carácter empresarial
     * @return string 'BNF001'
     */
    const VALUE_BNF_001 = 'BNF001';
    /**
     * Constant for value 'BNF002'
     * Meta information extracted from the WSDL
     * - documentation: Pessoas colectivas de utilidade pública administrativa e de mera utilidade pública
     * @return string 'BNF002'
     */
    const VALUE_BNF_002 = 'BNF002';
    /**
     * Constant for value 'BNF003'
     * Meta information extracted from the WSDL
     * - documentation: As instituições particulares de solidariedade social e entidades a estas legalmente equiparadas
     * @return string 'BNF003'
     */
    const VALUE_BNF_003 = 'BNF003';
    /**
     * Constant for value 'BNF004'
     * Meta information extracted from the WSDL
     * - documentation: As instituições de segurança social
     * @return string 'BNF004'
     */
    const VALUE_BNF_004 = 'BNF004';
    /**
     * Constant for value 'BNF005'
     * Meta information extracted from the WSDL
     * - documentation: Zona Franca da Madeira e de Santa Maria - Entidades licenciadas nas Zonas ou concessionárias da exploração da Zona
     * @return string 'BNF005'
     */
    const VALUE_BNF_005 = 'BNF005';
    /**
     * Constant for value 'BNF006'
     * Meta information extracted from the WSDL
     * - documentation: Sociedades de agricultura de grupo
     * @return string 'BNF006'
     */
    const VALUE_BNF_006 = 'BNF006';
    /**
     * Constant for value 'BNF007'
     * Meta information extracted from the WSDL
     * - documentation: Universidade Católica Portuguesa
     * @return string 'BNF007'
     */
    const VALUE_BNF_007 = 'BNF007';
    /**
     * Constant for value 'BNF008'
     * Meta information extracted from the WSDL
     * - documentation: Observatório europeu da droga e da toxicodependência
     * @return string 'BNF008'
     */
    const VALUE_BNF_008 = 'BNF008';
    /**
     * Constant for value 'BNF009'
     * Meta information extracted from the WSDL
     * - documentation: Banco Inter Americano de Desenvolvimento
     * @return string 'BNF009'
     */
    const VALUE_BNF_009 = 'BNF009';
    /**
     * Constant for value 'BNF010'
     * Meta information extracted from the WSDL
     * - documentation: Programa Polis
     * @return string 'BNF010'
     */
    const VALUE_BNF_010 = 'BNF010';
    /**
     * Constant for value 'BNF011'
     * Meta information extracted from the WSDL
     * - documentation: Partidos políticos
     * @return string 'BNF011'
     */
    const VALUE_BNF_011 = 'BNF011';
    /**
     * Constant for value 'BNF012'
     * Meta information extracted from the WSDL
     * - documentation: Código da Insolvência e da Recuperação de Empresas - Transmissões integradas em Planos de insolvência ou de pagamentos ou no âmbito da liquidação da massa insolvente
     * @return string 'BNF012'
     */
    const VALUE_BNF_012 = 'BNF012';
    /**
     * Constant for value 'BNF013'
     * Meta information extracted from the WSDL
     * - documentation: Instituições de ensino superior público
     * @return string 'BNF013'
     */
    const VALUE_BNF_013 = 'BNF013';
    /**
     * Constant for value 'BNF014'
     * Meta information extracted from the WSDL
     * - documentation: FIIAH / SIIAH - Artigo 8 - aquisição pelo FIIAH / SIIAH
     * @return string 'BNF014'
     */
    const VALUE_BNF_014 = 'BNF014';
    /**
     * Constant for value 'BNF015'
     * Meta information extracted from the WSDL
     * - documentation: Cooperativas
     * @return string 'BNF015'
     */
    const VALUE_BNF_015 = 'BNF015';
    /**
     * Constant for value 'BNF016'
     * Meta information extracted from the WSDL
     * - documentation: Arrendamento Rural
     * @return string 'BNF016'
     */
    const VALUE_BNF_016 = 'BNF016';
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
     * @uses self::VALUE_BNF_001
     * @uses self::VALUE_BNF_002
     * @uses self::VALUE_BNF_003
     * @uses self::VALUE_BNF_004
     * @uses self::VALUE_BNF_005
     * @uses self::VALUE_BNF_006
     * @uses self::VALUE_BNF_007
     * @uses self::VALUE_BNF_008
     * @uses self::VALUE_BNF_009
     * @uses self::VALUE_BNF_010
     * @uses self::VALUE_BNF_011
     * @uses self::VALUE_BNF_012
     * @uses self::VALUE_BNF_013
     * @uses self::VALUE_BNF_014
     * @uses self::VALUE_BNF_015
     * @uses self::VALUE_BNF_016
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BNF_001,
            self::VALUE_BNF_002,
            self::VALUE_BNF_003,
            self::VALUE_BNF_004,
            self::VALUE_BNF_005,
            self::VALUE_BNF_006,
            self::VALUE_BNF_007,
            self::VALUE_BNF_008,
            self::VALUE_BNF_009,
            self::VALUE_BNF_010,
            self::VALUE_BNF_011,
            self::VALUE_BNF_012,
            self::VALUE_BNF_013,
            self::VALUE_BNF_014,
            self::VALUE_BNF_015,
            self::VALUE_BNF_016,
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
