<?php
require("inc/header.php");
?>


<?php
    /*
    $hamac = [
        "name" => "Hamac",
        "description" => "Pour se reposer après 5 jours de PHP"
    ];
    $parasol =[
        "name" => "Parasol",
        "descritpion" => "Pour faire de l'ombre au hamac"
    ];
    $products = [];
    $products[] = $hamac;
    $products[] = $parasol;

    var_dump($porducts[1]); // là on appelle l'indice 1 du tableau products, cad $parasol
    */

    $products = [
        [
            "image_name" => "https://images.pexels.com/photos/1450372/pexels-photo-1450372.jpeg?cs=srgb&dl=azure-bay-beach-1450372.jpg&fm=jpg",
            "name" => "Hamac",
            "description" => "Pour se reposer après 5 jours de PHP"
        ], [
            "image_name" => "https://images.pexels.com/photos/802577/pexels-photo-802577.jpeg?cs=srgb&dl=chairs-design-furnitures-802577.jpg&fm=jpg",
            "name" => "Parasol",
            "description" => "Pour faire de l'ombre au hamac"
        ], [
            "image_name" => "https://uppict.piscine-center.net/fiche/22264/piscine-bois-woodfirst-original-octo-allongee-502-x-303-x-120-cm-liner-bleu-pale-piscine-center-1496999502.jpg",
            "name" => "Piscine",
            "description" => "Pour vous aidez à supporter cette chaleur d'été"
        ], [
            "image_name" => "https://images.pexels.com/photos/46274/pexels-photo-46274.jpeg?cs=srgb&dl=blur-blurred-book-pages-46274.jpg&fm=jpg",
            "name" => "Sélection de livre",
            "description" => "Notre sélection des meilleurs livres à lire en été dans notre hamac"
        ], [
            "image_name" => "https://images.pexels.com/photos/984619/pexels-photo-984619.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
            "name" => "chapeau",
            "description" => "Si vous ne prenez pas notre super parasol voici quelque chapeaux susceptible de vous protégez du soleil"
        ], [
            "image_name" => "https://www.alinea.com/dw/image/v2/BCKM_PRD/on/demandware.static/-/Sites-ali_master/default/dw44c680ca/images/26620541/BANQUETTE-ISSANBRES-26620541-A-1.png?sw=982&sh=982&sm=fit",
            "name" => "Canapé de terrasse",
            "description" => "Super canapé garantit résistant à toute intempéries, confortable et pour taille familial"
        ]
    ];
   // var_dump($products[2]);
?>
        <main class="container">
            <h1> Les tableaux </h1>
            <section class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col-4">
                    <div class="card">
                        <img src=" <?= $product['image_name']; ?>" class="card-img-top" alt="Nos produits">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $product['name']; ?> </h5>
                            <p class="card-text"> <?= $product['description']; ?> </p>
                            <a href="#" class="btn btn-primary">Acheter ? =D</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </section>
        </main>

<?php
    require("inc/footer.php");
?>
