<?php require_once 'database/item.class.php'?>
<div class="container main-container">
    <h1 class="text-center"></h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-3">
                <?php
                $listRestaurant = ["Holy Burgere",
                                    "MacDonals",
                                    "Shackers",
                    "Starbucks",
                    "Morgane",
                    "Yummy",
                    "Africa"
                    ];

                $listItems = [new Item(1,"Burger",9.99,"assets/burger.jpeg"),
                    new Item(2,"Burger",9.99,"assets/burger.jpeg"),
                new Item(3,"Burger",9.99,"assets/burger.jpeg"),
                    new Item(4,"Burger",9.99,"assets/burger.jpeg"),
                    new Item(5,"Burger",9.99,"assets/burger.jpeg"),];
                $taille =  count($listItems);
                ?>
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">RESTAURANTS</li>

                    <?php
                    foreach ($listRestaurant as $restaurant) {
                        ?><li class="list-group-item"><a href=""><?php echo $restaurant ?></a></li><?php
                    }
                    ?>
                </ul>
            </div>
            <div class="col-9">
                <h4 class="">Nouveautés</h4>
                <div class="row">
                    <?php for ($i = 0; $i < $taille-1; $i++): ?>
                <div class="card me-2" style="width: 18rem;">
                    <img src="<?php echo $listItems[$i]->getUrlImage() ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $listItems[$i]->getNameItem() ?></h5>
                        <p class="card-text"><?php echo $listItems[$i]->getPriceItem() ?></p>
                        <a href="#" id="<?php echo $listItems[$i]->getId() ?>" class="btn btn-primary">Ajouter au panier</a>
                    </div>
                </div>
                <?php endfor; ?>

                </div>
                </div>
            </div>
        </div>
    </div>

</div>