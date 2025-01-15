<?php

class Carro {
    private int $num_chassi;
    private string $ano_carro;
    private string $dono;
    public float $preco;
    public string $cor;
    public int $tamanho_aro;
    public string $marca;
    public string $modelo;
    public float $tanque;
    public int $km_rodados;

    function __construct($ano_carro, $modelo, $preco){
        $this->ano_carro = $ano_carro;
        $this->preco = $preco;
        $this->modelo = $modelo;
    }

    public function Ligar(){
        echo "<h1>Carro Ligado!!!</h1>";
    }

    public function Desligar(){
        echo "<h1>Carro Deslidado!!!</h1>";
    }

    public function Andar(){
        $tanque = $this->tanque;

        echo "O carro andou 4KM/h.";

        echo "<br>";
        $this->setTanque($tanque - .200);

        echo $this->tanque;
        echo "<br>";
    }

    public function getAnoCarro(){
        return $this->ano_carro;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getPreco(){
        return $this->preco;
    }

    public function getNumChassi(){
        return $this->num_chassi;
    }
    public function setNumChassi($num_chassi){
        $this->num_chassi = $num_chassi;
    }

    public function getDono(){
        return $this->dono;
    }
    public function setDono($dono){
        $this->dono = $dono;
    }

    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }

    public function getTamanhoAro(){
        return $this->tamanho_aro;
    }
    public function setTamanhoAro($tamanho_aro){
        $this->tamanho_aro = $tamanho_aro;
    }
    
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    
    public function getTanque(){
        return $this->tanque;
    }
    public function setTanque($tanque){
        $this->tanque = $tanque;
    }
    
    public function getKMRodados(){
        return $this->km_rodados;
    }
    public function setKMRodados($km_rodados){
        $this->km_rodados = $km_rodados;
    }
}

$car = new Carro(2004, "fiat uno", 50000);
$car->setNumChassi(123446234);
$num_chassi = $car->getNumChassi();
echo $num_chassi;


echo "<br>";
$car->setDono("Halyson");
$dono = $car->getDono();
echo $dono;

echo "<br>";
$car->setCor("Vermelho");
$Cor = $car->getCor();
echo $Cor;

echo "<br>";
$car->setTamanhoAro(14);
$TamanhoAro = $car->getTamanhoAro();
echo $TamanhoAro;

echo "<br>";
$car->setMarca("Fiat");
$Marca = $car->getMarca();
echo $Marca;

echo "<br>";
$car->setTanque(150.0);
$Tanque = $car->getTanque();
echo $Tanque;

echo "<br>";
$car->setKMRodados(200);
$KMRodados = $car->getKMRodados();
echo $KMRodados;

echo "<br>";
$AnoCarro = $car->getAnoCarro();
echo $AnoCarro;

echo "<br>";
$Modelo = $car->getModelo();
echo $Modelo;

echo "<br>";
$Preco = $car->getPreco();
echo $Preco;

$car->Ligar();
$car->Desligar();

$car->Andar();
$car->Andar();
$car->Andar();
$car->Andar();
$car->Andar();



?>