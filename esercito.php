    <?php
//     <!-- ESERCIZIO 3
// ARMY:
// ATTACCK-> Battaglione San Marco, Neavy Seals
// DEFENSE-> Royal Navy, gruppo Wagner -->

abstract class Attack{
    public abstract function attacco1();
    public abstract function attacco2();
}

class BattaglioneSanMarco extends Attack{
    public function attacco1(){
        echo "Siete segnati a morte\n";
    }
}

class NeavySeals extends Attack{
    public function attacco2(){
        echo "U.S.A winner!\n";
    }
}

abstract class Defense{
    public abstract function defense1();
    public abstract function defense2();
}

class RoyalNavy extends Defense{
    public function defense1(){
        echo "We will defend anyone!!\n";
    }
}

class GruppoWagner extends Defense{
    public function defense2(){
        echo "Se ci pagate saremo la vostra miglior difesa\n";
    }
}

class Army{
    public $attack;
    public $defense;

    public function __construct(Attack $_attack, Defense $_defense ){
        $this->attack = $_attack;
        $this->defense = $_defense;
    }
        
    public function attacco(){
        $this->attack->attacco1();
        $this->attack->attacco2();
    }  
    
    public function difesa(){
        $this->defense->defense1();
        $this->defense->defense2();

}

}

$esercito = new Army(new BattaglioneSanMarco(), new NeavySeals(), new RoyalNavy(), new GruppoWagner());

$esercito->attacco();
$firsthouse->difesa();