<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for imovel StructType
 * @subpackage Structs
 */
class Imovel extends AbstractStructBase
{
    /**
     * The distrito
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $distrito;
    /**
     * The concelho
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $concelho;
    /**
     * The freguesia
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 2
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $freguesia;
    /**
     * The tipo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $tipo;
    /**
     * The seccao
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 7
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $seccao;
    /**
     * The artigo
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 7
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $artigo;
    /**
     * The fracao
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 5
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $fracao;
    /**
     * The arvCol
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $arvCol;
    /**
     * The codigoPostal
     * Meta information extracted from the WSDL
     * - base: xs:short
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: \d{4}
     * @var int
     */
    public $codigoPostal;
    /**
     * The unidadeFuncional
     * Meta information extracted from the WSDL
     * - base: xs:short
     * - maxOccurs: 1
     * - minOccurs: 0
     * - pattern: \d{3}
     * @var int
     */
    public $unidadeFuncional;
    /**
     * The localidade
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 30
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $localidade;
    /**
     * The morada
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 3000
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $morada;
    /**
     * The numeroLote
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $numeroLote;
    /**
     * The andar
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 50
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $andar;
    /**
     * The parteArrendada
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - maxLength: 170
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $parteArrendada;
    /**
     * The parteComum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $parteComum;
    /**
     * The bemOmisso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $bemOmisso;
    /**
     * Constructor method for imovel
     * @uses Imovel::setDistrito()
     * @uses Imovel::setConcelho()
     * @uses Imovel::setFreguesia()
     * @uses Imovel::setTipo()
     * @uses Imovel::setSeccao()
     * @uses Imovel::setArtigo()
     * @uses Imovel::setFracao()
     * @uses Imovel::setArvCol()
     * @uses Imovel::setCodigoPostal()
     * @uses Imovel::setUnidadeFuncional()
     * @uses Imovel::setLocalidade()
     * @uses Imovel::setMorada()
     * @uses Imovel::setNumeroLote()
     * @uses Imovel::setAndar()
     * @uses Imovel::setParteArrendada()
     * @uses Imovel::setParteComum()
     * @uses Imovel::setBemOmisso()
     * @param string $distrito
     * @param string $concelho
     * @param string $freguesia
     * @param string $tipo
     * @param string $seccao
     * @param string $artigo
     * @param string $fracao
     * @param string $arvCol
     * @param int $codigoPostal
     * @param int $unidadeFuncional
     * @param string $localidade
     * @param string $morada
     * @param string $numeroLote
     * @param string $andar
     * @param string $parteArrendada
     * @param bool $parteComum
     * @param bool $bemOmisso
     */
    public function __construct($distrito = null, $concelho = null, $freguesia = null, $tipo = null, $seccao = null, $artigo = null, $fracao = null, $arvCol = null, $codigoPostal = null, $unidadeFuncional = null, $localidade = null, $morada = null, $numeroLote = null, $andar = null, $parteArrendada = null, $parteComum = null, $bemOmisso = null)
    {
        $this
            ->setDistrito($distrito)
            ->setConcelho($concelho)
            ->setFreguesia($freguesia)
            ->setTipo($tipo)
            ->setSeccao($seccao)
            ->setArtigo($artigo)
            ->setFracao($fracao)
            ->setArvCol($arvCol)
            ->setCodigoPostal($codigoPostal)
            ->setUnidadeFuncional($unidadeFuncional)
            ->setLocalidade($localidade)
            ->setMorada($morada)
            ->setNumeroLote($numeroLote)
            ->setAndar($andar)
            ->setParteArrendada($parteArrendada)
            ->setParteComum($parteComum)
            ->setBemOmisso($bemOmisso);
    }
    /**
     * Get distrito value
     * @return string
     */
    public function getDistrito()
    {
        return $this->distrito;
    }
    /**
     * Set distrito value
     * @param string $distrito
     * @return \StructType\Imovel
     */
    public function setDistrito($distrito = null)
    {
        // validation for constraint: string
        if (!is_null($distrito) && !is_string($distrito)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($distrito, true), gettype($distrito)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($distrito) && mb_strlen($distrito) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen($distrito)), __LINE__);
        }
        $this->distrito = $distrito;
        return $this;
    }
    /**
     * Get concelho value
     * @return string
     */
    public function getConcelho()
    {
        return $this->concelho;
    }
    /**
     * Set concelho value
     * @param string $concelho
     * @return \StructType\Imovel
     */
    public function setConcelho($concelho = null)
    {
        // validation for constraint: string
        if (!is_null($concelho) && !is_string($concelho)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($concelho, true), gettype($concelho)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($concelho) && mb_strlen($concelho) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen($concelho)), __LINE__);
        }
        $this->concelho = $concelho;
        return $this;
    }
    /**
     * Get freguesia value
     * @return string
     */
    public function getFreguesia()
    {
        return $this->freguesia;
    }
    /**
     * Set freguesia value
     * @param string $freguesia
     * @return \StructType\Imovel
     */
    public function setFreguesia($freguesia = null)
    {
        // validation for constraint: string
        if (!is_null($freguesia) && !is_string($freguesia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($freguesia, true), gettype($freguesia)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($freguesia) && mb_strlen($freguesia) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen($freguesia)), __LINE__);
        }
        $this->freguesia = $freguesia;
        return $this;
    }
    /**
     * Get tipo value
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
    /**
     * Set tipo value
     * @uses \EnumType\Tipo::valueIsValid()
     * @uses \EnumType\Tipo::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipo
     * @return \StructType\Imovel
     */
    public function setTipo($tipo = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Tipo::valueIsValid($tipo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Tipo', is_array($tipo) ? implode(', ', $tipo) : var_export($tipo, true), implode(', ', \EnumType\Tipo::getValidValues())), __LINE__);
        }
        $this->tipo = $tipo;
        return $this;
    }
    /**
     * Get seccao value
     * @return string|null
     */
    public function getSeccao()
    {
        return $this->seccao;
    }
    /**
     * Set seccao value
     * @param string $seccao
     * @return \StructType\Imovel
     */
    public function setSeccao($seccao = null)
    {
        // validation for constraint: string
        if (!is_null($seccao) && !is_string($seccao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($seccao, true), gettype($seccao)), __LINE__);
        }
        // validation for constraint: maxLength(7)
        if (!is_null($seccao) && mb_strlen($seccao) > 7) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 7', mb_strlen($seccao)), __LINE__);
        }
        $this->seccao = $seccao;
        return $this;
    }
    /**
     * Get artigo value
     * @return string|null
     */
    public function getArtigo()
    {
        return $this->artigo;
    }
    /**
     * Set artigo value
     * @param string $artigo
     * @return \StructType\Imovel
     */
    public function setArtigo($artigo = null)
    {
        // validation for constraint: string
        if (!is_null($artigo) && !is_string($artigo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($artigo, true), gettype($artigo)), __LINE__);
        }
        // validation for constraint: maxLength(7)
        if (!is_null($artigo) && mb_strlen($artigo) > 7) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 7', mb_strlen($artigo)), __LINE__);
        }
        $this->artigo = $artigo;
        return $this;
    }
    /**
     * Get fracao value
     * @return string|null
     */
    public function getFracao()
    {
        return $this->fracao;
    }
    /**
     * Set fracao value
     * @param string $fracao
     * @return \StructType\Imovel
     */
    public function setFracao($fracao = null)
    {
        // validation for constraint: string
        if (!is_null($fracao) && !is_string($fracao)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fracao, true), gettype($fracao)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($fracao) && mb_strlen($fracao) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen($fracao)), __LINE__);
        }
        $this->fracao = $fracao;
        return $this;
    }
    /**
     * Get arvCol value
     * @return string|null
     */
    public function getArvCol()
    {
        return $this->arvCol;
    }
    /**
     * Set arvCol value
     * @param string $arvCol
     * @return \StructType\Imovel
     */
    public function setArvCol($arvCol = null)
    {
        // validation for constraint: string
        if (!is_null($arvCol) && !is_string($arvCol)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($arvCol, true), gettype($arvCol)), __LINE__);
        }
        // validation for constraint: maxLength(3)
        if (!is_null($arvCol) && mb_strlen($arvCol) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3', mb_strlen($arvCol)), __LINE__);
        }
        $this->arvCol = $arvCol;
        return $this;
    }
    /**
     * Get codigoPostal value
     * @return int|null
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }
    /**
     * Set codigoPostal value
     * @param int $codigoPostal
     * @return \StructType\Imovel
     */
    public function setCodigoPostal($codigoPostal = null)
    {
        // validation for constraint: int
        if (!is_null($codigoPostal) && !(is_int($codigoPostal) || ctype_digit($codigoPostal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoPostal, true), gettype($codigoPostal)), __LINE__);
        }
        // validation for constraint: pattern(\d{4})
        if (!is_null($codigoPostal) && !preg_match('/\\d{4}/', $codigoPostal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{4}', var_export($codigoPostal, true)), __LINE__);
        }
        $this->codigoPostal = $codigoPostal;
        return $this;
    }
    /**
     * Get unidadeFuncional value
     * @return int|null
     */
    public function getUnidadeFuncional()
    {
        return $this->unidadeFuncional;
    }
    /**
     * Set unidadeFuncional value
     * @param int $unidadeFuncional
     * @return \StructType\Imovel
     */
    public function setUnidadeFuncional($unidadeFuncional = null)
    {
        // validation for constraint: int
        if (!is_null($unidadeFuncional) && !(is_int($unidadeFuncional) || ctype_digit($unidadeFuncional))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($unidadeFuncional, true), gettype($unidadeFuncional)), __LINE__);
        }
        // validation for constraint: pattern(\d{3})
        if (!is_null($unidadeFuncional) && !preg_match('/\\d{3}/', $unidadeFuncional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{3}', var_export($unidadeFuncional, true)), __LINE__);
        }
        $this->unidadeFuncional = $unidadeFuncional;
        return $this;
    }
    /**
     * Get localidade value
     * @return string|null
     */
    public function getLocalidade()
    {
        return $this->localidade;
    }
    /**
     * Set localidade value
     * @param string $localidade
     * @return \StructType\Imovel
     */
    public function setLocalidade($localidade = null)
    {
        // validation for constraint: string
        if (!is_null($localidade) && !is_string($localidade)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localidade, true), gettype($localidade)), __LINE__);
        }
        // validation for constraint: maxLength(30)
        if (!is_null($localidade) && mb_strlen($localidade) > 30) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 30', mb_strlen($localidade)), __LINE__);
        }
        $this->localidade = $localidade;
        return $this;
    }
    /**
     * Get morada value
     * @return string|null
     */
    public function getMorada()
    {
        return $this->morada;
    }
    /**
     * Set morada value
     * @param string $morada
     * @return \StructType\Imovel
     */
    public function setMorada($morada = null)
    {
        // validation for constraint: string
        if (!is_null($morada) && !is_string($morada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($morada, true), gettype($morada)), __LINE__);
        }
        // validation for constraint: maxLength(3000)
        if (!is_null($morada) && mb_strlen($morada) > 3000) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 3000', mb_strlen($morada)), __LINE__);
        }
        $this->morada = $morada;
        return $this;
    }
    /**
     * Get numeroLote value
     * @return string|null
     */
    public function getNumeroLote()
    {
        return $this->numeroLote;
    }
    /**
     * Set numeroLote value
     * @param string $numeroLote
     * @return \StructType\Imovel
     */
    public function setNumeroLote($numeroLote = null)
    {
        // validation for constraint: string
        if (!is_null($numeroLote) && !is_string($numeroLote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroLote, true), gettype($numeroLote)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($numeroLote) && mb_strlen($numeroLote) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($numeroLote)), __LINE__);
        }
        $this->numeroLote = $numeroLote;
        return $this;
    }
    /**
     * Get andar value
     * @return string|null
     */
    public function getAndar()
    {
        return $this->andar;
    }
    /**
     * Set andar value
     * @param string $andar
     * @return \StructType\Imovel
     */
    public function setAndar($andar = null)
    {
        // validation for constraint: string
        if (!is_null($andar) && !is_string($andar)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($andar, true), gettype($andar)), __LINE__);
        }
        // validation for constraint: maxLength(50)
        if (!is_null($andar) && mb_strlen($andar) > 50) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 50', mb_strlen($andar)), __LINE__);
        }
        $this->andar = $andar;
        return $this;
    }
    /**
     * Get parteArrendada value
     * @return string|null
     */
    public function getParteArrendada()
    {
        return $this->parteArrendada;
    }
    /**
     * Set parteArrendada value
     * @param string $parteArrendada
     * @return \StructType\Imovel
     */
    public function setParteArrendada($parteArrendada = null)
    {
        // validation for constraint: string
        if (!is_null($parteArrendada) && !is_string($parteArrendada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parteArrendada, true), gettype($parteArrendada)), __LINE__);
        }
        // validation for constraint: maxLength(170)
        if (!is_null($parteArrendada) && mb_strlen($parteArrendada) > 170) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 170', mb_strlen($parteArrendada)), __LINE__);
        }
        $this->parteArrendada = $parteArrendada;
        return $this;
    }
    /**
     * Get parteComum value
     * @return bool|null
     */
    public function getParteComum()
    {
        return $this->parteComum;
    }
    /**
     * Set parteComum value
     * @param bool $parteComum
     * @return \StructType\Imovel
     */
    public function setParteComum($parteComum = null)
    {
        // validation for constraint: boolean
        if (!is_null($parteComum) && !is_bool($parteComum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($parteComum, true), gettype($parteComum)), __LINE__);
        }
        $this->parteComum = $parteComum;
        return $this;
    }
    /**
     * Get bemOmisso value
     * @return bool|null
     */
    public function getBemOmisso()
    {
        return $this->bemOmisso;
    }
    /**
     * Set bemOmisso value
     * @param bool $bemOmisso
     * @return \StructType\Imovel
     */
    public function setBemOmisso($bemOmisso = null)
    {
        // validation for constraint: boolean
        if (!is_null($bemOmisso) && !is_bool($bemOmisso)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bemOmisso, true), gettype($bemOmisso)), __LINE__);
        }
        $this->bemOmisso = $bemOmisso;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \StructType\Imovel
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
