<pre>
Crie uma classe contendo 3 propriedades com seus respectivos gets e sets e um método que multiplique as 3 retornando o produto. 
Deixe um exemplo de utilização da sua classe no final do código.
<hr>
Resposta:

<?php

class Multiplicador {

    private $a;
    private $b;
    private $c; 

    public function __construct($n1, $n2, $n3) {
	$this->a = $n1;
	$this->b = $n2;
	$this->c = $n3;
    }

    function setA($v) {
	$this->a = $v;
    }

    function setB($v) {
	$this->a = $v;
    }

    function setC($v) {
	$this->a = $v;
    }

    function getA() {
	return $this->a;
    }

    function getB() {
	return $this->b;
    }

    function getC() {
	return $this->c;
    }


    function multiplica() {
	return $this->a * $this->b * $this->c;
    }

}

$m = new Multiplicador(2,3,4);
echo $m->multiplica();


?>
</pre>
