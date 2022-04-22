<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="style.css">
    <title>PHP MySQL AJAX</title>
</head>


<body>

    <nav class="navbar navbar-light bg-info">
        <div class="container-fluid">
            <a id="ps-meni" class="navbar-brand" href="pretragaSortiranje.php">
                Pretraga / Sortiranje
            </a>
        </div>
    </nav>


    <div class="ps-main-div">
        <div class="tbl-sort">
            <table id="tabela-sort" class="table table-bordered table-hover table-striped table-light">
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
                <tbody>
                    <?php
                    $konekcija = new mysqli("localhost", "root", "", "potrazivanja");

                    $upit = "select p.id, p.faktura, p.iznos, p.valuta, k.naziv, k.email, k.broj_telefona from potrazivanje p join kompanija k on p.kompanija_id=k.id";
                    $result = $konekcija->query($upit);

                    while ($potrazivanje = mysqli_fetch_object($result)) {
                    ?>

                        <tr>
                            <td><?php echo $potrazivanje->id ?></td>
                            <td><?php echo $potrazivanje->faktura ?></td>
                            <td><?php echo $potrazivanje->iznos ?></td>
                            <td><?php echo $potrazivanje->valuta ?></td>
                            <td><?php echo $potrazivanje->naziv ?></td>
                            <td><?php echo $potrazivanje->email ?></td>
                            <td><?php echo $potrazivanje->broj_telefona ?></td>

                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="  https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="javascript.js"></script>
</body>

</html>