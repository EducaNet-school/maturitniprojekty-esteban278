<?php
class Auto
{
    protected $typ;
    protected $značka;

    public function __construct($typ, $značka)
    {
        $this->typ = $typ;
        $this->značka = $značka;
    }

    public function __toString()
    {
        return "Typ: " . $this->typ . ", značka: " . $this->značka;
    }

    public function získatInfo()
    {
        return $this->__toString();
    }
}

class nakladniVuz extends Auto
{
    private $kapacita;

    public function __construct($typ, $značka, $kapacita)
    {
        parent::__construct($typ, $značka);
        $this->kapacita = $kapacita;
    }

    public function získatInfo()
    {
        return parent::získatInfo() . ", kapacita: " . $this->kapacita;
    }
}

class Elektromobil extends Auto
{
    private $dosah;

    public function __construct($typ, $značka, $dosah)
    {
        parent::__construct($typ, $značka);
        $this->dosah = $dosah;
    }

    public function získatInfo()
    {
        return parent::získatInfo() . ", dosah: " . $this->dosah;
    }
}

$auto = new Auto("Focus", "Ford");
$nákladníVůz = new nakladniVuz("Tatra", "Tatra", "7 tun");
$elektromobil = new Elektromobil("Krabice", "Tesla", "500 km");

$vozy = [$auto, $nákladníVůz, $elektromobil];

function vytisknoutInfoVozidla(array $vozy)
{
    foreach ($vozy as $vozidlo) {
        if ($vozidlo instanceof Auto) {
            echo $vozidlo->získatInfo() . "<br>";
        } else {
            throw new Exception('Neplatné vozidlo');
        }
    }
}


vytisknoutInfoVozidla($vozy);
?>