<?php

class Fruto {

    // propriedades
    public $name;

}

$laranja = new Fruto();

// definir o valor da propriedade
$laranja -> name = "Laranja";

// criar outro objeto do tipo Fruto
$ananas = new Fruto();
$ananas->name = "Ananás";

// como vamos apresentar as propriedades de um objeto?
echo $laranja -> name;
echo "<br>";
echo $ananas -> name;

// cada objeto criado a partir da mesma classe, contém as suas propriedades
// de forma completamente indepedente.