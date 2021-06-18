<head>
    <link rel="stylesheet" href="./productHeader.css">
</head>

<body></body>
<header id="header">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="px-5">
            <a href="FirstPage.php"><img src="../Firstpage_img//WHlogo-719px.png" width="50" height="50"></a>
        </div>
        <nav class="navbar1">
            <!-- <ul class="navbar"> -->
            <a class="navbar-h" href="index.php">球鞋專區</a>
            <a class="navbar-h" href="">專業運動</a>
            <a class="navbar-h" href="">服裝客製化</a>
            <a class="navbar-h" href="">維修服務</a>
            <a class="navbar-h" href="">故事屋</a>
            <!-- </ul> -->
        </nav>

        <!-- <a href="index.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Shopping Cart
            </h3>
        </a> -->


        <!-- <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button> -->

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> 購物車
                        <?php

                        if (isset($_SESSION['cart'])) {
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        } else {
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>
</body>