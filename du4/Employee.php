<?php

/**
 * Created by IntelliJ IDEA.
 * User: kotn0
 * Date: 16.03.2017
 * Time: 22:02
 */
class Employee
{
private $jmeno;
private $prijmeni;
private $pohlavi;
private $ulice;
private $obec;
private $psc;
private $telefon;
private $email;
private $pozice;
private $nadrizeny;

    /**
     * Employee constructor.
     * @param $jmeno
     * @param $prijmeni
     * @param $pohlavi
     * @param $ulice
     * @param $obec
     * @param $psc
     * @param $telefon
     * @param $email
     * @param $pozice
     * @param $nadrizeny
     */
    public function __construct($jmeno, $prijmeni, $pohlavi, $ulice, $obec, $psc, $telefon, $email, $pozice, $nadrizeny)
    {
        $this->jmeno = $jmeno;
        $this->prijmeni = $prijmeni;
        $this->pohlavi = $pohlavi;
        $this->ulice = $ulice;
        $this->obec = $obec;
        $this->psc = $psc;
        $this->telefon = $telefon;
        $this->email = $email;
        $this->pozice = $pozice;
        $this->nadrizeny = $nadrizeny;
    }


}