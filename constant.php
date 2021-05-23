<?php

// define('NAMA', 'Yayang Setia Budi');

// echo NAMA;

// echo "<br>";

// const UMUR = 23;
// echo UMUR;

// class Coba {
//     const NAMA = 'Yayang Setia Budi';
// }

// echo Coba::NAMA;

// echo __FILE__;

// function Coba() {
//     return __FUNCTION__;
// }

// echo Coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;