<?php
// ESERCIZIO 2
// CASA:
// TETTO-> Legno
// MURA-> CEMENTOARMATO
// PAVIMENTO-> PARQUET

abstract class Tetto{
    public abstract function coverhouse();
}

class Legno extends Tetto{
    public function coverhouse(){
        echo "Abbiamo coperto, non piove in casa!!\n";
    }

}

abstract class Mura{
    public abstract function murato();
}

class Cementoarmato extends Mura{
    public function murato(){
        echo "Entra?? Non penso proprio\n";
    }
}

abstract class Pavimento{
    public abstract function terra();
}

class Parquet extends Pavimento{
    public function terra(){
        echo "Scelta del pavimento ottimo, bel parquet!";
    }
}

class House{
    public $tetto;
    public $mura;
    public $pavimento;

    public function __construct(Tetto $_tetto, Mura $_mura, Pavimento $_pavimento){
        $this->tetto = $_tetto;
        $this->mura = $_mura;
        $this->pavimento = $_pavimento;

    }

    public function cover(){
        $this->tetto->coverhouse();
    }  
    
    public function chiuso(){
        $this->mura->murato();
    }

    public function suolo(){
        $this->pavimento->terra();
    }
}

$firsthouse = new House(new Legno(), new Cementoarmato(), new Parquet());

$firsthouse->cover();
$firsthouse->chiuso();
$firsthouse->suolo();