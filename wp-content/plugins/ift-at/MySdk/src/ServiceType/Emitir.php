<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Emitir ServiceType
 * @subpackage Services
 */
class Emitir extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named emitirRecibo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\EmitirReciboRequest $emitirReciboRequest
     * @return \StructType\EmitirReciboResponse|bool
     */
    public function emitirRecibo(\StructType\EmitirReciboRequest $emitirReciboRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->emitirRecibo($emitirReciboRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\EmitirReciboResponse
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
