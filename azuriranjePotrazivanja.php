<?php

include('Potrazivanje.php');

$konekcija = new mysqli("localhost", "root", "", "potrazivanja");

$potrazivanje = new Potrazivanje();
$potrazivanje->id = $_POST['ID'];
$potrazivanje->faktura = $_POST['FAKTURA'];
$potrazivanje->iznos = $_POST['IZNOS'];
$potrazivanje->valuta = $_POST['VALUTA'];
$potrazivanje->kompanija_id = $_POST['KOMPANIJA_ID'];

$upit = "update potrazivanje set faktura='$potrazivanje->faktura', iznos='$potrazivanje->iznos', valuta='$potrazivanje->valuta', kompanija_id='$potrazivanje->kompanija_id' where id=$potrazivanje->id";
$konekcija->query($upit);
