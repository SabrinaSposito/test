<?php
class Pessoa{

private $idade;
private $altura;

public function __construtor(){
    $this->idade = (int) 0;
    $this->altura = (float) 0;
}

public function getAltura(){
    return $this->altura;

}
public function crescer($metros){
$this->altura += $metros;
}
public function getIdade(){
    return $this->idade;
}
public function envelhecer ($anos){
    $this->idade += $anos;
}

}