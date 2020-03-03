<?php

class locatario
{

    /**
     * @var nif $nif
     */
    protected $nif = null;

    /**
     * @var docIdentificacao $docIdentificacao
     */
    protected $docIdentificacao = null;

    /**
     * @var pais $pais
     */
    protected $pais = null;

    /**
     * @var retencaoFonte $retencaoFonte
     */
    protected $retencaoFonte = null;

    /**
     * @param nif $nif
     * @param docIdentificacao $docIdentificacao
     * @param pais $pais
     * @param retencaoFonte $retencaoFonte
     */
    public function __construct($nif, $docIdentificacao, $pais, $retencaoFonte)
    {
      $this->nif = $nif;
      $this->docIdentificacao = $docIdentificacao;
      $this->pais = $pais;
      $this->retencaoFonte = $retencaoFonte;
    }

    /**
     * @return nif
     */
    public function getNif()
    {
      return $this->nif;
    }

    /**
     * @param nif $nif
     * @return locatario
     */
    public function setNif($nif)
    {
      $this->nif = $nif;
      return $this;
    }

    /**
     * @return docIdentificacao
     */
    public function getDocIdentificacao()
    {
      return $this->docIdentificacao;
    }

    /**
     * @param docIdentificacao $docIdentificacao
     * @return locatario
     */
    public function setDocIdentificacao($docIdentificacao)
    {
      $this->docIdentificacao = $docIdentificacao;
      return $this;
    }

    /**
     * @return pais
     */
    public function getPais()
    {
      return $this->pais;
    }

    /**
     * @param pais $pais
     * @return locatario
     */
    public function setPais($pais)
    {
      $this->pais = $pais;
      return $this;
    }

    /**
     * @return retencaoFonte
     */
    public function getRetencaoFonte()
    {
      return $this->retencaoFonte;
    }

    /**
     * @param retencaoFonte $retencaoFonte
     * @return locatario
     */
    public function setRetencaoFonte($retencaoFonte)
    {
      $this->retencaoFonte = $retencaoFonte;
      return $this;
    }

}
