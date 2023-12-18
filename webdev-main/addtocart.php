<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="addtocart.css">
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="addtocart.js">
    </head>
    <body>
        <div class="header">
            <p class="logo">TJ ONLINE SHOP GADGETS</p>
             <a href="logout.php" class="logout" type="submit" value="submit"><i class="fa-solid fa-cart-shopping"></i>Logout</a>
             <a href="index.php" class="logout" type="submit" value="submit"><i class="fa-solid fa-users"></i>Profile</a>
             <a href="crud.php" style="color:white;"class="crud" type="submit" value="submit"><i class="fa-solid fa-users"></i>crud</a> 
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container"> 
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>My Cart</p></div>
                <div id="cartItem">Your cart is empty</div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">$ 0.00</h2>
                </div>
            </div>
        </div>
        <script src="addtocart.js"></script>
    </body>
</html>