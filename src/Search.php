<?php

namespace Devmarco\BuscaCep;

class Search{    
    private $url = "https://viacep.com.br/ws/";

/* Há duas formas de declarar esta array de CEP
   usando o que esta em verde ou o return com 
   json_decode*/
    public function getAdressFromZipcode(string $zipCode):/*<===apague estes dois pontos se for
                                                             usar o que esta em verde*/
   // {
        array{
        //([
       
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);
   // ]);
        $get = file_get_contents($this->url . $zipCode . "/json");
   
       // print_r($get);
       return (array) json_decode($get);
    }
}