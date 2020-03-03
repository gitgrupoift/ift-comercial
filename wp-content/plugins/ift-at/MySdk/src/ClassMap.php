<?php
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'registarDadosContratoRequest' => '\\StructType\\RegistarDadosContratoRequest',
            'imoveis' => '\\StructType\\Imoveis',
            'imovel' => '\\StructType\\Imovel',
            'locadores' => '\\StructType\\Locadores',
            'locador' => '\\StructType\\Locador',
            'locatarios' => '\\StructType\\Locatarios',
            'locatario' => '\\StructType\\Locatario',
            'locadoresPrevios' => '\\StructType\\LocadoresPrevios',
            'locadorPrevio' => '\\StructType\\LocadorPrevio',
            'registarDadosContratoResponse' => '\\StructType\\RegistarDadosContratoResponse',
            'erros' => '\\StructType\\Erros',
            'erro' => '\\StructType\\Erro',
            'emitirReciboRequest' => '\\StructType\\EmitirReciboRequest',
            'herdeiros' => '\\StructType\\Herdeiros',
            'herdeiro' => '\\StructType\\Herdeiro',
            'emitirReciboResponse' => '\\StructType\\EmitirReciboResponse',
            'obterReciboRequest' => '\\StructType\\ObterReciboRequest',
            'obterReciboResponse' => '\\StructType\\ObterReciboResponse',
        );
    }
}
