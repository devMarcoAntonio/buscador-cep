<?php

require_once "vendor/autoload.php";

use \Devmarco\BuscaCep\Search;

$busca = new Search;

$resultado = $busca->getAdressFromZipcode('01001000');

print_r($resultado);