<?php


class Personel{
    public $tcNo;
    public $adSoyad;
    public $odaNumarasi;

    function __construct($tcNo,$adSoyad,$odaNumarasi){
        $this->tcNo=$tcNo;
        $this->adSoyad=$adSoyad;
        $this->odaNumarasi=$odaNumarasi;
    }

    /**
     * @return mixed
     */
    public function getAdSoyad()
    {
        return $this->adSoyad;
    }

    /**
     * @return mixed
     */
    public function getOdaNumarasi()
    {
        return $this->odaNumarasi;
    }

    /**
     * @return mixed
     */
    public function getTcNo()
    {
        return $this->tcNo;
    }


}