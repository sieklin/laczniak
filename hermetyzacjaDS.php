<?php
    class samochod {
        private $vin;
        public $predkosc;
        private $v_max;
        public $model;
        public $marka;
    
        function __construct() {
            $this->v_max = 200;
        }
    
        function saveVin($vin) {
            $this->vin = $vin;
        }
    
        function readVin() {
            return $this->vin;
        }
    
        function saveVMax($v_max) {
            $this->v_max = $v_max;
        }
    
        function zwiekszPredkosc($liczba) {
            if ($this->predkosc + $liczba <= $this->v_max) {
                $this->predkosc += $liczba;
            }
        }
    }
    
    class osobowy extends Samochod {
        public $ile_osob;
        private $wlasciciel;

        public function wlasciciel(){
            return $this -> wlasciciel;
        }
    }

    
    class ciezarowy extends Samochod {
        public $ladownosc;
    
        function __construct() {
            parent::__construct();
            $this->marka = 'Scania';
            $this->model = 'F400';
            $this->saveVMax(120);
        }
    }
    $osobowy1 = new Osobowy($vin, null, $model, $marka, $predkosc, null, null);
    ?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <form method="post" action="hermetyzacjaDS.php">
        Model: <input type="text" name="model"><br>
        Marka: <input type="text" name="marka"><br>
        Prędkość: <input type="text" name="predkosc"><br>
        VIN: <input type="text" name="vin"><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>