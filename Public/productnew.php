<?php
    require ("inc/header.php");
   // var_dump($_GET);
   // var_dump($_POST);
?>

<main class="container">

    <h1>Ajout d'un produit</h1>

    <form method="post" class="was-validated">

        <label for="name">Nom</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Required LastName" required>
        <label for="firstname">Pr&eacute;nom</label>
        <input type="text" id="firstname" name="firsname" class="form-control" placeholder="Required FirstName" required>
        <label for="description">Descritpion du produit</label>
        <textarea name="descrption" id="" cols="30" rows="10" id="description" class="form-control" required></textarea>
        <label for="prix">Prix</label>
        <input type="number" id="prix" name="prix" class="form-control" step="0.1" min="1" max="99" required>
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="customControlValidation1" name="customControlValidation1">
            <label class="custom-control-label" for="customControlValidation1">Publish?</label>
        </div>
        <label for="date">Date</label>
        <input type="date" id="date" name="date" class="form-control" required>


        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-2">Valider</button>
        </div>
    </form>
</main>

<?php
    require ("inc/footer.php");
?>