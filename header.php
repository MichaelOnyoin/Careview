<header id="header" class="header">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <style>
            .navbar-brand {
                background-color: #00529c;
            }
            .header{
                background-color: #00529c;
            }
        </style>
        <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
            <i class="material-icons">shopping_basket</i> Shopping Cart
            </h3>
        </a>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                    <i class="material-icons">shopping_cart</i>Cart
                        <?php

                        if (isset($_SESSION['add_to_cart'])){
                            $count = count($_SESSION['add_to_cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>