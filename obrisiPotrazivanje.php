<?php

$konekcija = new mysqli("localhost", "root", "", "potrazivanja");

$id = $_POST['ID'];

$upit = "delete from potrazivanje where id=" . $id;
$konekcija->query($upit);
