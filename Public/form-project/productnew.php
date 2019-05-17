<?php
// inclusion des fichiers PHP
require "../inc/header.php";
require "handle-product-new.php";
?>

    <main class="container">

        <h1>Ajout d'un produit</h1>

        <form method="post" class="was-validated"><!-- -->

            <label for="name">Nom</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Required LastName">
            <label for="firstname">Pr&eacute;nom</label>
            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Required FirstName">
            <label for="description">Description du produit</label>
            <textarea name="description" cols="30" rows="10" id="description" class="form-control"></textarea>
            <label for="prix">Prix</label>
            <input type="number" id="prix" name="prix" class="form-control" step="0.01" min="0" max="10E7">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="publie" name="publie">
                <label class="custom-control-label" for="publie">Publish?</label>
            </div>
            <label for="view">Nombre de vues</label>
            <input type="number" id="view" name="view" class="form-control" step="1">
            <label for="date">Date</label>
            <input type="date" id="date" name="date" class="form-control">

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Valider</button>
            </div>
        </form>
    </main>

<?php
require("../inc/footer.php");
?>