<?php

class Lingkaran {
private $jari;
const PHI = 3.14;
function __construct( $r ){
     $this->jari = $r;
 } 
 function getLuas(){
    return self::PHI * $this->jari * $this->jari ;
 }
 function getKeliling(){
    return 2 * self::PHI * $this->jari;
 }
}

?>