<?php
    $title = 'Sidenav';

    include 'head.php';
?>
  
    <div class="open-btn">
        <ion-icon name="menu-outline" class="open-icon"></ion-icon>
    </div>

    <div class="side-bar">
        
        <div class="close-btn">
            <ion-icon name="close-outline" class="close-icon"></ion-icon>
        </div>

        <div class="menu">

            <div class="item">
                <a href="dashboard.php">
                    <ion-icon name="tv-outline"></ion-icon>
                    Dashboard
                </a>
            </div>

            <div class="item">
                <a href="">
                    <ion-icon name="bag-outline"></ion-icon>
                    Order
                </a>
            </div>

            <div class="item">
                <a href="category.php">
                    <ion-icon name="shirt-outline"></ion-icon>
                    Categories
                </a>
            </div>

            <div class="item">
                <a class="sub-btn">
                    <ion-icon name="cube-outline"></ion-icon>
                    Inventory
                    <ion-icon name="chevron-forward-outline" class="dropdown"></ion-icon>
                </a>

                <div class="sub-menu">
                    <a href="">Sizes</a>
                    <a href="stockitems.php">Stock Items</a>
                    <a href="">Stock Levels</a>
                </div>
            </div>

            <div class="item">
                <a class="sub-btn">
                    <ion-icon name="stats-chart-outline"></ion-icon>
                    Report
                    <ion-icon name="chevron-forward-outline" class="dropdown"></ion-icon>
                </a>

                <div class="sub-menu">
                    <a href="">Inventory Report</a>
                </div>
            </div>

            <div class="item">
                <a href=""><ion-icon name="people-outline"></ion-icon>
                    Users
                </a>
            </div>

            <div class="item">
                <a href="logout.php"><ion-icon name="log-out-outline"></ion-icon>
                    Logout
                </a>
            </div>

        </div>

    </div>

<?php
    include 'foot.php';
?>
