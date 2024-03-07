<?php
if(isset($_GET['altura_retangulo'], $_GET['largura_retangulo'])){

    echo 'Dados recebidos <br />';
}

?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
    Altura Retangulo
    <input name = "altura_retangulo" type = "text" id = "ja"/>
    <br>
    <br>
    Largura Retangulo
    <input name = "largura_retangulo" type = "text" id = "ja"/>
    <br>
    <br>
 ________________________________________________________________________
    <br>
    Altura Quadrado
    <input name = 'altura_quadrado' type = 'text' id = 'ja'/>
    <br>
    <br>
    Largura Quadrado
    <input name = 'largura_quadrado' type = 'text' id = 'ja'/>
    <br>
    <br>
  ________________________________________________________________________
  <br>
  <br>
    Altura Paralelogramo
    <input name = 'altura_paralelogramo' type = 'text' id = 'ja'/>
    <br>
    <br>
    Largura Paralelogramo
    <input name = 'largura_paralelogramo' type = 'text' id = 'ja'/>
    <br>
    <br>
 ________________________________________________________________________
 <br>
 <br>
    Lado A Trapezio
    <input name = 'altura_trapezio' type = 'text' id = 'ja'/>
    <br>
    <br>
    Lado b Trapezio
    <input name = 'lado_b' type = 'text' id = 'ja'/>
    <br>
    <br>
    Lado C Trapezio
    <input name = 'lado_c' type = 'text' id = 'ja'/>
    <br>
    <br>
    Lado B Trapezio
    <input name = 'lado_B' type = 'text' id = 'ja'/>
    </form>
</body>
</html>

<?php
if(isset($_GET['altura_retangulo'], $_GET['largura_retangulo'])){

    echo 'Dados recebidos <br />';
}
/*
$lr = $_GET['largura_retangulo'];
$ar = $_GET['altura_retangulo'];

class Retangulo {
    public $larguraRetangulo;
    public $alturaRetangulo;

public function __construct($lr, $ar){
    $this->larguraRetangulo = $lr;
    $this->alturaRetangulo = $ar;
}

public function getlarguraRetangulo(){
    return $this->larguraRetangulo;
}

public function perimetroRetangulo($larguraRetangulo, $alturaRetangulo){

    $pr = 2*($this->$larguraRetangulo+ $this->$alturaRetangulo);
    return $pr;
}

public function perimetroQuadrado($larguraQuadrado, $alturaQuadrado){

    $qr = ($larguraQuadrado*4);

    return $qr;

}

public function perimetroParalelogramo($larguraParalelogramo, $alturaParalelogramo){

    $lp = 2*($alturaParalelogramo+$larguraParalelogramo);
}

public function perimetroTrapzio($larguraTrapezio, $lado_b,$lado_B,$lado_c) {

    $pt = ($larguraTrapezio+$lado_b+$lado_B+$lado_c);
}



}

$retangulo = new Retangulo($lr, $ar);
*/
