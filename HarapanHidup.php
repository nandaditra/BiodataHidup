<?php

//class untuk membuat BiodataHidup

class BiodataHidup {
    private $Nama;
    private $Umur;
    private $Status;
    
    public function __construct($Nama, $Umur, $Status) {
        $this->setNama($Nama);
        $this->setUmur($Umur);
        $this->setStatus($Status);
    }

    public function setNama($Nama) {
        $this->Nama = $Nama;
    }

    public function getNama() {
        return $this->Nama;
    }

    public function setUmur($Umur) {
        $this->Umur = $Umur;
    }

    public function getUmur() {
        return $this->Umur;
    }

    public function setStatus($Status) {
        $this->Status = $Status;
    }

    public function getStatus() {
        return $this->Status;
    }

}

echo "-------Yuk Buat Biodata Hidup Anda------------\n";
echo "Isi data dibawah ini dengan benar: \n";

//Bagian untuk mengisikan data Anda 

$Nama = readline("Nama Anda : ");
$Umur = readline("Umur Anda : ");
$Status = readline("Status (Jomblo/Nikah/Belum Nikah/Janda)  : ");

$CekHidup = new BiodataHidup($Nama, $Umur, $Status);

$RefCek = new ReflectionClass($CekHidup);

$RefNama = $RefCek->getMethod("getNama");
$RefUmur = $RefCek->getMethod("getUmur");
$RefStatus = $RefCek->getMethod("getStatus");

echo "\nNama \t\t\t:";
echo $RefNama->invoke($CekHidup);

echo "\nUmur \t\t\t:";
echo $RefUmur->invoke($CekHidup);

echo "\nStatus \t\t\t:";
echo $RefStatus->invoke($CekHidup);

?>

