<?php
namespace Parcel\Test;

use Parcel\Parcelamento;

class ParcelamentoTest {
    
    public static function runTest(){
        $parcelamento = new Parcelamento(12, 6, 10.00, 0);
        
        d($parcelamento->gerarParcelas('5587.56'));
    }
}