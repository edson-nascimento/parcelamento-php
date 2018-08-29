<?php
namespace Parcel\Test;

use Parcel\Parcelamento;

class ParcelamentoTest {
    
    public static function runTest(){
        $parcelamento = new Parcelamento(6, 12, 10.00, 2.50);
        
        return $parcelamento->gerarParcelas();
    }
}