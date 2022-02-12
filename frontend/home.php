<?php
session_start();

if (!isset($_SESSION["username"])){
    header("Location:/ProgettoVacanza/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>

<body onload="getXMLData()">
     <h1 class="display-4">Benvenuto <?php echo $_SESSION["username"]; ?>!</h1>
    <div class="input-group mb-3">
        <span class="input-group-text">€</span>
        <span class="input-group-text"><input type="number" class="form-control" placeholder="Ammontare" id="ammontare"></span>

        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false" id="dropdownTipo">Tipo</button>
        <ul class="dropdown-menu">
            <li class="dropdown-item" onclick="setTipo(this)">Benzina</li>
            <li class="dropdown-item" onclick="setTipo(this)">Alimenti</li>
            <li class="dropdown-item" onclick="setTipo(this)">Alloggio</li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li class="dropdown-item" onclick="setTipo(this)">Bonifico</li>
        </ul>

        <input type="text" aria-label="First name" class="form-control" id="nominativo" placeholder="Nominativo">
        <input type="date" aria-label="Last name" class="form-control" id="data">

        <button type="button" class="btn btn-primary" onclick="invia()">Invia</button>
    </div>

    <footer>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Nominativo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ammontare</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody id="tableBody"></tbody>
        </table>
    </footer>

    <script src="./js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>
