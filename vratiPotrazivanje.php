<?php

include('Potrazivanje.php');

$konekcija = new mysqli("localhost", "root", "", "potrazivanja");

$id = $_POST['ID'];

$upit = "select * from potrazivanje where id=" . $id;
$result = $konekcija->query($upit);

while ($p = mysqli_fetch_object($result)) {

    $potrazivanje = new Potrazivanje();
    $potrazivanje->id = $id;
    $potrazivanje->faktura = $p->faktura;
    $potrazivanje->iznos = $p->iznos;
    $potrazivanje->valuta = $p->valuta;
    $potrazivanje->kompanija_id = $p->kompanija_id;
}

echo json_encode($potrazivanje);
