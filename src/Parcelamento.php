<?php
namespace Parcel;

class Parcelamento {
    
    private $parcelasSemJuros;
    private $parcelasComJuros;
    private $valorMinimoParcelar;
    private $porcentagemJuros;
    
    public function __construct($parcelasSemJuros=0, $parcelasComJuros=0, $valorMinimoParcelar=0, $porcentagemJuros=0){
        $this->parcelasSemJuros    = $parcelasSemJuros;
        $this->parcelasComJuros    = $parcelasComJuros;
        $this->valorMinimoParcelar = $valorMinimoParcelar;
        $this->porcentagemJuros    = $porcentagemJuros;
    }
    
    public function gerarParcelas(){
        $parcelas = array();
        
        return $parcelas;
    }
    
    
    
    
    
    
    
    
    public function getParcelasSemJuros() {
        return $this->parcelasSemJuros;
    }

    public function setParcelasSemJuros($parcelasSemJuros) {
        $this->parcelasSemJuros = $parcelasSemJuros;
    }

    public function getParcelasComJuros() {
        return $this->parcelasComJuros;
    }

    public function setParcelasComJuros($parcelasComJuros) {
        $this->parcelasComJuros = $parcelasComJuros;
    }

    public function getValorMinimoParcelar() {
        return $this->valorMinimoParcelar;
    }

    public function setValorMinimoParcelar($valorMinimoParcelar) {
        $this->valorMinimoParcelar = $valorMinimoParcelar;
    }

    public function getPorcentagemJuros() {
        return $this->porcentagemJuros;
    }

    public function setPorcentagemJuros($porcentagemJuros) {
        $this->porcentagemJuros = $porcentagemJuros;
    }

    
    
}