<?php
namespace Parcel\Test;

use Parcel\Parcelamento;

class ParcelamentoTest {
    
    public static function runTest(){
        $parcelamento = new Parcelamento(12, 6, 10.00, 2.75);
        
        d($parcelamento->gerarParcelas('5587.56'));
        
        $parcelamento = new Parcelamento();
        
        $parcelamento->setMaxParcelas(10);
        $parcelamento->setParcelasSemJuros(5);
        $parcelamento->setValorMinimoParcelar(50.00);
        $parcelamento->setPorcentagemJuros(2.50);
        
        d($parcelamento->gerarParcelas('777.77'));
    }
}