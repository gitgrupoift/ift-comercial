<?php

class herdeiro
{

    /**
     * @var nif $nif
     */
    protected $nif = null;

    /**
     * @var quotaParte $quotaParte
     */
    protected $quotaParte = null;

    /**
     * @var nifHeranca $nifHeranca
     */
    protected $nifHeranca = null;

    /**
     * @param nif $nif
     * @param quotaParte $quotaParte
     * @param nifHeranca $nifHeranca
     */
    public function __construct($nif, $quotaParte, $nifHeranca)
    {
      $this->nif = $nif;
      $this->quotaParte = $quotaParte;
      $this->nifHeranca = $nifHeranca;
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
     * @return herdeiro
     */
    public function setNif($nif)
    {
      $this->nif = $nif;
      return $this;
    }

    /**
     * @return quotaParte
     */
    public function getQuotaParte()
    {
      return $this->quotaParte;
    }

    /**
     * @param quotaParte $quotaParte
     * @return herdeiro
     */
    public function setQuotaParte($quotaParte)
    {
      $this->quotaParte = $quotaParte;
      return $this;
    }

    /**
     * @return nifHeranca
     */
    public function getNifHeranca()
    {
      return $this->nifHeranca;
    }

    /**
     * @param nifHeranca $nifHeranca
     * @return herdeiro
     */
    public function setNifHeranca($nifHeranca)
    {
      $this->nifHeranca = $nifHeranca;
      return $this;
    }

}
