<?php

class imovel
{

    /**
     * @var distrito $distrito
     */
    protected $distrito = null;

    /**
     * @var concelho $concelho
     */
    protected $concelho = null;

    /**
     * @var freguesia $freguesia
     */
    protected $freguesia = null;

    /**
     * @var tipo $tipo
     */
    protected $tipo = null;

    /**
     * @var seccao $seccao
     */
    protected $seccao = null;

    /**
     * @var artigo $artigo
     */
    protected $artigo = null;

    /**
     * @var fracao $fracao
     */
    protected $fracao = null;

    /**
     * @var arvCol $arvCol
     */
    protected $arvCol = null;

    /**
     * @var codigoPostal $codigoPostal
     */
    protected $codigoPostal = null;

    /**
     * @var unidadeFuncional $unidadeFuncional
     */
    protected $unidadeFuncional = null;

    /**
     * @var localidade $localidade
     */
    protected $localidade = null;

    /**
     * @var morada $morada
     */
    protected $morada = null;

    /**
     * @var numeroLote $numeroLote
     */
    protected $numeroLote = null;

    /**
     * @var andar $andar
     */
    protected $andar = null;

    /**
     * @var parteArrendada $parteArrendada
     */
    protected $parteArrendada = null;

    /**
     * @var boolean $parteComum
     */
    protected $parteComum = null;

    /**
     * @var boolean $bemOmisso
     */
    protected $bemOmisso = null;

    /**
     * @param distrito $distrito
     * @param concelho $concelho
     * @param freguesia $freguesia
     * @param tipo $tipo
     * @param seccao $seccao
     * @param artigo $artigo
     * @param fracao $fracao
     * @param arvCol $arvCol
     * @param codigoPostal $codigoPostal
     * @param unidadeFuncional $unidadeFuncional
     * @param localidade $localidade
     * @param morada $morada
     * @param numeroLote $numeroLote
     * @param andar $andar
     * @param parteArrendada $parteArrendada
     * @param boolean $parteComum
     * @param boolean $bemOmisso
     */
    public function __construct($distrito, $concelho, $freguesia, $tipo, $seccao, $artigo, $fracao, $arvCol, $codigoPostal, $unidadeFuncional, $localidade, $morada, $numeroLote, $andar, $parteArrendada, $parteComum, $bemOmisso)
    {
      $this->distrito = $distrito;
      $this->concelho = $concelho;
      $this->freguesia = $freguesia;
      $this->tipo = $tipo;
      $this->seccao = $seccao;
      $this->artigo = $artigo;
      $this->fracao = $fracao;
      $this->arvCol = $arvCol;
      $this->codigoPostal = $codigoPostal;
      $this->unidadeFuncional = $unidadeFuncional;
      $this->localidade = $localidade;
      $this->morada = $morada;
      $this->numeroLote = $numeroLote;
      $this->andar = $andar;
      $this->parteArrendada = $parteArrendada;
      $this->parteComum = $parteComum;
      $this->bemOmisso = $bemOmisso;
    }

    /**
     * @return distrito
     */
    public function getDistrito()
    {
      return $this->distrito;
    }

    /**
     * @param distrito $distrito
     * @return imovel
     */
    public function setDistrito($distrito)
    {
      $this->distrito = $distrito;
      return $this;
    }

    /**
     * @return concelho
     */
    public function getConcelho()
    {
      return $this->concelho;
    }

    /**
     * @param concelho $concelho
     * @return imovel
     */
    public function setConcelho($concelho)
    {
      $this->concelho = $concelho;
      return $this;
    }

    /**
     * @return freguesia
     */
    public function getFreguesia()
    {
      return $this->freguesia;
    }

    /**
     * @param freguesia $freguesia
     * @return imovel
     */
    public function setFreguesia($freguesia)
    {
      $this->freguesia = $freguesia;
      return $this;
    }

    /**
     * @return tipo
     */
    public function getTipo()
    {
      return $this->tipo;
    }

    /**
     * @param tipo $tipo
     * @return imovel
     */
    public function setTipo($tipo)
    {
      $this->tipo = $tipo;
      return $this;
    }

    /**
     * @return seccao
     */
    public function getSeccao()
    {
      return $this->seccao;
    }

    /**
     * @param seccao $seccao
     * @return imovel
     */
    public function setSeccao($seccao)
    {
      $this->seccao = $seccao;
      return $this;
    }

    /**
     * @return artigo
     */
    public function getArtigo()
    {
      return $this->artigo;
    }

    /**
     * @param artigo $artigo
     * @return imovel
     */
    public function setArtigo($artigo)
    {
      $this->artigo = $artigo;
      return $this;
    }

    /**
     * @return fracao
     */
    public function getFracao()
    {
      return $this->fracao;
    }

    /**
     * @param fracao $fracao
     * @return imovel
     */
    public function setFracao($fracao)
    {
      $this->fracao = $fracao;
      return $this;
    }

    /**
     * @return arvCol
     */
    public function getArvCol()
    {
      return $this->arvCol;
    }

    /**
     * @param arvCol $arvCol
     * @return imovel
     */
    public function setArvCol($arvCol)
    {
      $this->arvCol = $arvCol;
      return $this;
    }

    /**
     * @return codigoPostal
     */
    public function getCodigoPostal()
    {
      return $this->codigoPostal;
    }

    /**
     * @param codigoPostal $codigoPostal
     * @return imovel
     */
    public function setCodigoPostal($codigoPostal)
    {
      $this->codigoPostal = $codigoPostal;
      return $this;
    }

    /**
     * @return unidadeFuncional
     */
    public function getUnidadeFuncional()
    {
      return $this->unidadeFuncional;
    }

    /**
     * @param unidadeFuncional $unidadeFuncional
     * @return imovel
     */
    public function setUnidadeFuncional($unidadeFuncional)
    {
      $this->unidadeFuncional = $unidadeFuncional;
      return $this;
    }

    /**
     * @return localidade
     */
    public function getLocalidade()
    {
      return $this->localidade;
    }

    /**
     * @param localidade $localidade
     * @return imovel
     */
    public function setLocalidade($localidade)
    {
      $this->localidade = $localidade;
      return $this;
    }

    /**
     * @return morada
     */
    public function getMorada()
    {
      return $this->morada;
    }

    /**
     * @param morada $morada
     * @return imovel
     */
    public function setMorada($morada)
    {
      $this->morada = $morada;
      return $this;
    }

    /**
     * @return numeroLote
     */
    public function getNumeroLote()
    {
      return $this->numeroLote;
    }

    /**
     * @param numeroLote $numeroLote
     * @return imovel
     */
    public function setNumeroLote($numeroLote)
    {
      $this->numeroLote = $numeroLote;
      return $this;
    }

    /**
     * @return andar
     */
    public function getAndar()
    {
      return $this->andar;
    }

    /**
     * @param andar $andar
     * @return imovel
     */
    public function setAndar($andar)
    {
      $this->andar = $andar;
      return $this;
    }

    /**
     * @return parteArrendada
     */
    public function getParteArrendada()
    {
      return $this->parteArrendada;
    }

    /**
     * @param parteArrendada $parteArrendada
     * @return imovel
     */
    public function setParteArrendada($parteArrendada)
    {
      $this->parteArrendada = $parteArrendada;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getParteComum()
    {
      return $this->parteComum;
    }

    /**
     * @param boolean $parteComum
     * @return imovel
     */
    public function setParteComum($parteComum)
    {
      $this->parteComum = $parteComum;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBemOmisso()
    {
      return $this->bemOmisso;
    }

    /**
     * @param boolean $bemOmisso
     * @return imovel
     */
    public function setBemOmisso($bemOmisso)
    {
      $this->bemOmisso = $bemOmisso;
      return $this;
    }

}
