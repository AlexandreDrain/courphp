<?php
    require ("inc/header.php");
?>

<main class="container">

    <h1>Ajout d'un produit</h1>

    <form action="" method="">

        <label for="name">Nom</label>
        <input type="text" id="name" class="form-control">
        <label for="firstname">Pr&eacute;nom</label>
        <input type="text" id="firstname" class="form-control">
        <label for="prix">Prix</label>
        <input type="number" id="prix" class="form-control" step="0.1" min="1" max="99" required>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-2">Valider</button>
        </div>



    </form>


</main>

<?php
    require ("inc/footer.php");
?>