<?php

class Animal{

    public function falar(){

        return "Som";
    }

    public function mover(){

        return "Anda";
    }
}

class Cachorro extends Animal {

    public function falar(){

        return "Late";
    }
}

class Gato extends Animal{

    public function falar(){

        return "Mia";
    }
}

class Passaro extends Animal {

    public function falar(){

        return "canta";
    }

    public function mover(){

        return "Voa e " . parent::mover();
    }
}

$pluto = new Cachorro();

echo $pluto->falar() . "<br/>";
echo $pluto->mover() . "<br/>";

echo "-------------------------<br/>";

$lucky = new Gato();

echo $lucky->falar() . "<br/>";
echo $lucky->mover() . "<br/>";

echo "-------------------------<br/>";

$ave = new Passaro();

echo $ave->falar() . "<br/>";
echo $ave->mover() . "<br/>";
?>