<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAT Electronics</title>
    <style>
        body {
            background-color: #b7a8c8;
            overflow-x:hidden;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            max-width: 100%;
        }
        .header {
            padding: 20px 0;
        }
        .header img {
            width: 150px;
        }
        .nav {
            margin-top: 10px;
        }
        .nav a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            margin: 0 15px;
            font-size: 18px;
        }
        .nav a:hover {
            color: blue;
        }
        .content {
            max-width: 80%;
            margin: 0 auto;
            padding: 20px;
            text-align: justify;
        }
        .products {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .product {
            text-align: center;
        }
        .product img {
            width: 250px;
            height: 250px;
            border-radius: 10px;
        }
        .price {
            font-weight: bold;
            margin-top: 5px;
        }
        .footer {
            margin-top: auto;
            padding: 15px;
            background-color: #9e8cb5;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
            max-width: 100%;
        }
    </style>
</head>
<body>
    
    <div class="header">
        <a href="mainPage.php">
            <img src="Images/VAT.png" alt="VAT Electronics">
        </a>
    </div>

    <div class="nav">
        <a href="gaming.php">Gaming</a>
        <a href="information.php">Information</a>
        <a href="support.php">Support</a>
        <a href="crud.php">Sign in</a>
        <a href="catalog.php">Catalog</a>
    </div>

    <div class="content">
        <p>Exclusive and High-end Electronics from appliances to high-end Computer Technology. Our company ensures the best prices for customers with price matching, so take advantage of it to get the best deals. If you have any issues, visit the Support page for assistance. Enjoy browsing!</p>
    </div>

    <div class="products">
        <div class="product">
            <img src="Images/Gaming_PC.png" alt="Gaming PC">
            <div class="price">&pound;1199.99</div>
        </div>
        <div class="product">
            <img src="Images/Bosch.png" alt="Bosch Appliance">
            <div class="price">&pound;185.99</div>
        </div>
        <div class="product">
            <img src="Images/Bush.png" alt="Bush TV">
            <div class="price">&pound;899.99</div>
        </div>
        <div class="product">
            <img src="Images/Breville.png" alt="Breville Coffee Machine">
            <div class="price">&pound;199.99</div>
        </div>
        <div class="product">
            <img src="Images/Nintendo.png" alt="Nintendo Switch">
            <div class="price">&pound;1999.99</div>
        </div>
    </div>

    <div class="footer">
        &copy; 2025 VAT Electronics - All Rights Reserved
    </div>
    
</body>
</html>
