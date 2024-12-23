<?php
    $title = 'Sidenav';
    
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'], '/')+1);
?>
<div class="main-content">
    <aside id="sidebar">
        <ul>
            <li>
                <span class="logo">Stuart Boutique</span>
                <button onclick="toggleSidebar()" id="toggle-btn">
                    <ion-icon name="chevron-back-outline" class="open-icon"></ion-icon>
                </button>
            </li>
            <li class="<?= $page == 'dashboard.php' ? 'active':'' ?>">
                <a href="dashboard.php">
                    <ion-icon name="tv-outline" class="icons"></ion-icon>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="<?= $page == 'purchase.php' ? 'active':'' ?>">
                <a href="purchase.php">
                    <ion-icon name="bag-outline" class="icons"></ion-icon>
                    <span>Purchase</span>
                </a>
            </li>
            <li class="<?= $page == 'category.php' ? 'active':'' ?>">
                <a href="category.php">
                    <ion-icon name="shirt-outline" class="icons"></ion-icon>
                    <span>Categories</span>
                </a>
            </li>
            <li class="<?= $page == 'inventory.php' ? 'active':'' ?>">
                <a href="inventory.php">
                    <ion-icon name="cube-outline" class="icons"></ion-icon>
                    <span>Inventory</span>
                </a>
            </li>
            <li>
                <button onclick="toggleSubMenu(this)" class="dropdown-btn">
                    <ion-icon name="stats-chart-outline" class="icons"></ion-icon>
                    <span>Reports</span>
                    <ion-icon name="chevron-down-outline"></ion-icon>
                </button>
                <ul class="sub-menu">
                    <div class="child-menu">
                        <li class="<?= $page == 'salesReport.php' ? 'active':'' ?>">
                            <a href="salesReport.php">Sales</a>
                        </li>
                        <li class="<?= $page == 'inventoryReport.php' ? 'active':'' ?>">
                            <a href="inventoryReport.php">Inventory</a>
                        </li>
                    </div>
                </ul>
            </li>
            <li class="<?= $page == 'users.php' ? 'active':'' ?>">
                <a href="users.php">
                    <ion-icon name="people-outline" class="icons"></ion-icon>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <ion-icon name="log-out-outline" class="icons"></ion-icon>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </aside>
