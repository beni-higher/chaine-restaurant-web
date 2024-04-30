<?php
class Employe{
    private $id;
    private $nomEmploye;
    private $motDePasse;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomEmploye()
    {
        return $this->nomEmploye;
    }

    /**
     * @param mixed $nomEmploye
     */
    public function setNomEmploye($nomEmploye): void
    {
        $this->nomEmploye = $nomEmploye;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * @param mixed $motDePasse
     */
    public function setMotDePasse($motDePasse): void
    {
        $this->motDePasse = $motDePasse;
    }

    /**
     * @param $id
     * @param $nomEmploye
     * @param $motDePasse
     */
    public function __construct($id, $nomEmploye, $motDePasse)
    {
        $this->id = $id;
        $this->nomEmploye = $nomEmploye;
        $this->motDePasse = $motDePasse;
    }
}