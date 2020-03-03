<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Obter ServiceType
 * @subpackage Services
 */
class Obter extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named obterRecibo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ObterReciboRequest $obterReciboRequest
     * @return \StructType\ObterReciboResponse|bool
     */
    public function obterRecibo(\StructType\ObterReciboRequest $obterReciboRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->obterRecibo($obterReciboRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ObterReciboResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
