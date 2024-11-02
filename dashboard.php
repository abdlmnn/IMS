<?php
    $title = 'Dashboard';

    include 'includes/header.php';
    include 'includes/sidebar.php';
?>
    <main>
        <div class="content-cont">

            <div class="box-cont">
    
                <div class="cards">

                    <div class="card">
                        <div class="box">
                            <span class="total-number">1300</span>
                            <span class="text-box">Total Purchases</span>
                        </div>
                        <div class="case">
                            <ion-icon name="bag-outline" class="icon"></ion-icon>
                        </div>
                    </div>

                    <div class="card">
                        <div class="box">
                            <span class="total-number">500</span>
                            <span class="text-box">Total Items</span>
                        </div>
                        <div class="case">
                            <ion-icon name="cube-outline" class="icon"></ion-icon>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="box">
                            <span class="total-number">7</span>
                            <span class="text-box">Total Categories</span>
                        </div>
                        <div class="case">
                            <ion-icon name="shirt-outline" class="icon"></ion-icon>
                        </div>
                    </div>

                </div>

                <hr style="color: #000;">

                <h2 class="available-item">Available Items</h2>
                <table class="stock-table">
                    <thead>
                        <tr>
                            <th>Item Name</th>
                            <th>Sizes</th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jordan 1</td>
                            <td>42</td>
                            <td>25</td>
                            <td>Available</td>
                        </tr>
                        <tr>
                            <td>Menace Shirt</td>
                            <td>Large</td>
                            <td>10</td>
                            <td>Available</td>
                        </tr>
                        <tr>
                            <td>NBA socks</td>
                            <td>Medium</td>
                            <td>5</td>
                            <td>Available</td>
                        </tr>
                    </tbody>
                </table>

                <hr style="color: #000;">
                
                <h2 class="stock-in">Stock In</h2>
                <table class="stock-table">
                    <thead>
                        <tr>
                            <th>Item ID</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Shirt</td>
                            <td>50</td>
                            <td>2024-11-01</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Shoes</td>
                            <td>30</td>
                            <td>2024-11-02</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pants</td>
                            <td>20</td>
                            <td>2024-11-03</td>
                        </tr>
                    </tbody>
                </table>

                <hr style="color: #000;">

                <h2 class="stock-in">Stock Out</h2>
                <table class="stock-table">
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Item Name</th>
                            <th>Quantity</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Shoes</td>
                            <td>10</td>
                            <td>2024-11-01</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Hoodie</td>
                            <td>5</td>
                            <td>2024-11-02</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Pants</td>
                            <td>15</td>
                            <td>2024-11-03</td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </main>
<?php
    include "includes/footer.php";
?>