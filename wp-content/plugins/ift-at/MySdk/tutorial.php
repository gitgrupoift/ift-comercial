<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'arrendamento.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'arrendamento.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
);
/**
 * Samples for Registar ServiceType
 */
$registar = new \ServiceType\Registar($options);
/**
 * Sample call for registarDadosContrato operation/method
 */
if ($registar->registarDadosContrato(new \StructType\RegistarDadosContratoRequest()) !== false) {
    print_r($registar->getResult());
} else {
    print_r($registar->getLastError());
}
/**
 * Samples for Obter ServiceType
 */
$obter = new \ServiceType\Obter($options);
/**
 * Sample call for obterRecibo operation/method
 */
if ($obter->obterRecibo(new \StructType\ObterReciboRequest()) !== false) {
    print_r($obter->getResult());
} else {
    print_r($obter->getLastError());
}
/**
 * Samples for Emitir ServiceType
 */
$emitir = new \ServiceType\Emitir($options);
/**
 * Sample call for emitirRecibo operation/method
 */
if ($emitir->emitirRecibo(new \StructType\EmitirReciboRequest()) !== false) {
    print_r($emitir->getResult());
} else {
    print_r($emitir->getLastError());
}
