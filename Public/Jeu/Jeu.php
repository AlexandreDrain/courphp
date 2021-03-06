<?php
require("../inc/header.php");
require("traitment.php");
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
    <h1>Jeu des lettres aléatoire</h1>
    <?php if (!empty($resultMsg)) : ?>
        <h2>Résultat :</h2>
        <p> <?= $resultMsg; ?> </p>
    <?php endif; ?>

    <section class="form-group">

        <form action="" method="post" class="was-validated" style="width: 300px; background: darkgray;">

            <div class="row">

                <label for="lettre"></label>
                <input type="text" id="lettre" name="lettre" class="form-control" min="1" maxlength="1" required
                       style="width: 50%;" autofocus>
                <p style="width: 40%; height: 50px; line-height: 50px; text-align: center; background: aqua; color: #000;"> <?= $resultCpt ?></p>
            </div>

            <input type="submit" class="form-control" placeholder="Valider" id="bouton" name="bouton">

        </form>
    </section>
</main>

</body>
</html>

<?php
require("../inc/footer.php");
?>
