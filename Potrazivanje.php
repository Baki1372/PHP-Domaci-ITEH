<?php

class Potrazivanje
{
    public $id;
    public $faktura;
    public $iznos;
    public $valuta;
    public $kompanija_id;

    public function dodajPotrazivanje($faktura, $iznos, $valuta, $kompanija_id, $konekcija)
    {
        $upit = "insert into potrazivanje values (NULL, '$faktura', '$iznos', '$valuta', '$kompanija_id')";
        $konekcija->query($upit);
    }
}
