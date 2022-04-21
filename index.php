<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP MySQL AJAX</title>
</head>

<body>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a id="ps-meni" class="navbar-brand" href="#">
                Pretraga / Sortiranje
            </a>
        </div>
    </nav>


    <div class="index-main-div">
        <h1 class="text-center mt-5">Potraživanja 2021/22</h1>

        <div class="tabela-index mt-5">
            <table id="tabela-index" class="table table-bordered table-hover table-striped table-light border border-4">
                <thead>
                    <tr class="table-dark">
                        <th>ID</th>
                        <th>Faktura</th>
                        <th>Iznos</th>
                        <th>Valuta</th>
                        <th>Naziv kompanije</th>
                        <th>Email</th>
                        <th>Telefon</th>
                    </tr>
                </thead>
                <tbody class="border border-4">
                    <?php

                    $konekcija = new mysqli("localhost", "root", "", "potrazivanja");

                    $upit = "select p.id, p.faktura, p.iznos, p.valuta, k.naziv, k.email, k.broj_telefona from potrazivanje p join kompanija k on p.id=k.id";
                    $result = $konekcija->query($upit);

                    while ($potrazivanje = mysqli_fetch_object($result)) {
                    ?>
                        <tr class="border border-4">
                            <td class="border border-4"><?php echo $potrazivanje->id ?></td>
                            <td class="border border-4"><?php echo $potrazivanje->faktura ?></td>
                            <td class="border border-4"><?php echo $potrazivanje->iznos ?></td>
                            <td class="border border-4"><?php echo $potrazivanje->valuta ?></td>
                            <td class="border border-4"><?php echo $potrazivanje->naziv ?></td>
                            <td class="border border-4"><?php echo $potrazivanje->email ?></td>
                            <td class="border border-4"><?php echo $potrazivanje->broj_telefona ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>