<?php

// ESERCIZIO 1 
// SUDDIVISIONE ARMATURA:
// HEAD-> VISORE
// BODY-> LANCIARAZZINUCLEARI
// LIMBS-> PROPULSORI


abstract class Head{
    public abstract function vision();
}

class Scan extends Head{

    public function vision(){
       
        echo "Apri Visione\n";
    }

}

abstract class Body{
    public abstract function attack();
}

class NuclearRocket extends Body{
    public function attack(){
        
        echo "Game over loser\n";
    }
}

abstract class Limbs{
    public abstract function move();
}

class Thrusters extends Limbs{
    public function move(){
        echo "Propulsori massima potenza, modalità supersonica attivata\n";
    }
}


class Armour{
// ATTRIBUTI

    public $head;
    public $body;
    public $limbs; 

// COSTRUTTORE

    public function __construct(Head $_head, Body $_body, Limbs $_limbs){
        $this->head = $_head;
        $this->body = $_body;
        $this->limbs = $_limbs;

    }

// METODI

 public function visione(){
    $this->head->vision();

 }    

 public function nuclear(){
    $this->body->attack();
 }

 public function moves(){
    $this->limbs->move();
 }
}

// OGGETTO    

$mk1 = new Armour(new Scan(), new NuclearRocket(), new Thrusters());

$mk1->visione();
$mk1->nuclear();
$mk1->moves();
