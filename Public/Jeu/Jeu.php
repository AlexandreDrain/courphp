<?php
require ("../inc/header.php");
require ("traitment.php");
require ("functionJeu.php");
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<main class="container">
    <section class="row">
        <form action="" method="post" class="was-validated" style="width: 300px; background: darkgray;">

            <label for="lettre"></label>
            <input type="text" id="lettre" name="lettre" class="form-control" min="1" max="1" required style="width: 50%; margin: auto" autofocus>
            <input type="submit" class="form-control" placeholder="Valider">

        </form>
    </section>
</main>

</body>
</html>




<?php
require ("../inc/footer.php");
?>
