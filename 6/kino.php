<?php
class Kino {
    public function ProdejLístku(Film $film, Divak $divak) {
        if ($film->getVekovaHranice() > $divak->getVek()) {
            throw new Exception("CustomerTooYoungException");
        } elseif ($film->getCena() > $divak->getPenize()) {
            throw new Exception("MissingMoneyException");
        } else {
            $divak->odecistiPenize($film->getCena());
            echo "Prodáno";
        }
    }
}

class Film {
    private $cena;
    private $vekovaHranice;

    public function __construct($cena, $vekovaHranice) {
        $this->cena = $cena;
        $this->vekovaHranice = $vekovaHranice;
    }

    public function getCena() {
        return $this->cena;
    }

    public function getVekovaHranice() {
        return $this->vekovaHranice;
    }
}

class Divak {
    private $penize;
    private $vek;

    public function __construct($penize, $vek) {
        $this->penize = $penize;
        $this->vek = $vek;
    }

    public function getPenize() {
        return $this->penize;
    }

    public function getVek() {
        return $this->vek;
    }

    public function odecistiPenize($cena) {
        $this->penize -= $cena;
    }
}

//určení parametrů volání
$film = new Film(100, 15);
$divak = new Divak(80, 16);
$kino = new Kino();


//volání
try {
    $kino->ProdejLístku($film, $divak);
} catch (Exception $e) {
    echo "Chyba při prodeji lístku: " . $e->getMessage();
}


?>