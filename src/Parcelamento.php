<?php
namespace Parcel;

class Parcelamento {
    
    private $parcelasSemJuros;
    private $maxParcelas;
    private $valorMinimoParcelar;
    private $porcentagemJuros = 0;
    
    public function __construct($maxParcelas=0, $parcelasSemJuros=0, $valorMinimoParcelar=0, $porcentagemJuros=0){
        $this->maxParcelas          = $maxParcelas;
        $this->parcelasSemJuros     = $parcelasSemJuros;
        $this->valorMinimoParcelar  = $valorMinimoParcelar;
        $this->porcentagemJuros     = $porcentagemJuros;
    }
    
    public function gerarParcelas($valorTotal){
        
        $parcelasSemjuros   = $this->maxParcelasSemJuros($valorTotal);
        $maxParcelas        = $this->maxParcelas($valorTotal);
        
        $parcelas = array();
        
        for ($parcela = 1; $parcela <= $maxParcelas; $parcela++) {
            
            if($parcela <= $parcelasSemjuros) {
                $valorParcela = $this->calcularParcelasSemJuros($valorTotal, $parcela);
                $labelParcela = gettext(' sem juros');
            }else {
                $valorParcela = $this->calcularParcelasComJuros($valorTotal, $parcela);
                $labelParcela = gettext(' com juros');
            }
            
            $valorParcela = round($valorParcela, 2);
            $parcelas[$parcela] = $parcela.'x '.$labelParcela.' '.$valorParcela;
        }
        
        return $parcelas;
    }
    
    private function calcularParcelasSemJuros($valorTotal, $parcelas){
        
        return ($valorTotal/$parcelas);
    }
    
    private function calcularParcelasComJuros($valorTotal, $parcelas){
        
        $montante = $valorTotal * (pow((1+($this->porcentagemJuros/100)) , $parcelas));
        
        return ($montante/$parcelas);
    }
    
    private function maxParcelas($valorTotal) {
        
        $maxParcelas = 1;
        
        if($valorTotal >= $this->valorMinimoParcelar) {
            for ($i = 1; $i <= $this->maxParcelas; $i++) {
                $valorParcela = $valorTotal/$i;
                if($valorParcela < $this->valorMinimoParcelar){
                    break;
                }
                $maxParcelas = $i;
            }
        }
        
        return $maxParcelas;
    }
    
    private function maxParcelasSemJuros($valorTotal) {
        $parcelasSemjuros = 1;
        
        if($valorTotal >= $this->valorMinimoParcelar) {
            for ($i = 1; $i <= $this->maxParcelas; $i++) {
                $valor_parcela = $valorTotal/$i;
                if($valor_parcela < $this->valorMinimoParcelar){
                    break;
                }
                if($i <= $this->parcelasSemJuros) {
                    $parcelasSemjuros = $i;
                }
            }
        }
        
        return $parcelasSemjuros;
    }
    
    
    
    public function getParcelasSemJuros() {
        return $this->parcelasSemJuros;
    }

    public function setParcelasSemJuros($parcelasSemJuros) {
        $this->parcelasSemJuros = $parcelasSemJuros;
    }

    public function getMaxParcelas() {
        return $this->maxParcelas;
    }

    public function setMaxParcelas($maxParcelas) {
        $this->maxParcelas = $maxParcelas;
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