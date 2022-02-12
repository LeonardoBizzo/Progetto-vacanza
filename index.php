<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location:./frontend/home.php");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./frontend/css/index.css" rel="stylesheet" />

    <title>Document</title>
</head>

<body>
    <h1 class="display-4">Registrati</h1>
    <form method="POST" action="./backend/signup.php" class="row g-3 needs-validation formBlock">
        <div>
            <label for="validationCustom01" class="form-label">Nome</label>
            <input type="text" class="form-control" id="validationCustom01" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div>
            <label for="validationCustom02" class="form-label">Cognome</label>
            <input type="text" class="form-control" id="validationCustom02" value="" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div>
            <label for="validationCustomUsername" class="form-label">Nomeutente</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div>
            <label for="validationCustom03" class="form-label">Email</label>
            <input type="email" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div>
            <label for="validationCustom04" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Registrati!</button>
        </div>
    </form>
    <hr />

    <h1 class="display-4">Accedi</h1>
    <form method="POST" action="./backend/login.php" class="row g-3 needs-validation formBlock">
        <div>
            <label for="validationCustomUsername" class="form-label">Nomeutente</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
                <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <div>
            <label for="validationCustom03" class="form-label">Email</label>
            <input type="email" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div>
            <label for="validationCustom04" class="form-label">Password</label>
            <input type="password" class="form-control" id="validationCustom03" required>
            <div class="invalid-feedback">
                Please select a valid state.
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Accedi!</button>
        </div>
    </form>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
