<?php
class Client{
    private $nomClient;
    private $adresseClient;
    private $courriel;
    private $nomCarteCredit;
    private $numero;
    private $dateExpiration;

    /**
     * @return mixed
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * @param mixed $nomClient
     */
    public function setNomClient($nomClient): void
    {
        $this->nomClient = $nomClient;
    }

    /**
     * @return mixed
     */
    public function getAdresseClient()
    {
        return $this->adresseClient;
    }

    /**
     * @param mixed $adresseClient
     */
    public function setAdresseClient($adresseClient): void
    {
        $this->adresseClient = $adresseClient;
    }

    /**
     * @return mixed
     */
    public function getCourriel()
    {
        return $this->courriel;
    }

    /**
     * @param mixed $courriel
     */
    public function setCourriel($courriel): void
    {
        $this->courriel = $courriel;
    }

    /**
     * @return mixed
     */
    public function getNomCarteCredit()
    {
        return $this->nomCarteCredit;
    }

    /**
     * @param mixed $nomCarteCredit
     */
    public function setNomCarteCredit($nomCarteCredit): void
    {
        $this->nomCarteCredit = $nomCarteCredit;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * @param mixed $dateExpiration
     */
    public function setDateExpiration($dateExpiration): void
    {
        $this->dateExpiration = $dateExpiration;
    }

    /**
     * @return mixed
     */
    public function getCodeSecurite()
    {
        return $this->codeSecurite;
    }

    /**
     * @param mixed $codeSecurite
     */
    public function setCodeSecurite($codeSecurite): void
    {
        $this->codeSecurite = $codeSecurite;
    }
    private $codeSecurite;

    /**
     * @param $nomClient
     * @param $adresseClient
     * @param $courriel
     * @param $nomCarteCredit
     * @param $numero
     * @param $dateExpiration
     * @param $codeSecurite
     */
    public function __construct($nomClient, $adresseClient, $courriel, $nomCarteCredit, $numero, $dateExpiration, $codeSecurite)
    {
        $this->nomClient = $nomClient;
        $this->adresseClient = $adresseClient;
        $this->courriel = $courriel;
        $this->nomCarteCredit = $nomCarteCredit;
        $this->numero = $numero;
        $this->dateExpiration = $dateExpiration;
        $this->codeSecurite = $codeSecurite;
    }

}