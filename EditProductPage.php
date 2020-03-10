
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=width-device,initial-scale=1.0">
        <link rel="stylesheet" href="css/mystyle.css">

        <title>Edit Product</title>
    </head>
    <body>
        <header>

        </header>
        <main>
            <div class="login-box center">
                <form action="functions/UpdateProduct.php" method="post" name="ProductForm">
                    <h2 class="text-white text-center">UPDATE PRODUCT</h1>
                    <div class="row">
                        <span class="text-white">Product ID</span>
                        <input type="text" value="<?php echo $_GET['id']; ?>" class="center" readonly name="ProductID"/>
                    </div>
                    <div class="row">
                        <span class="text-white">Product Name</span>
                        <input type="text" value="<?php echo $_GET['pname']; ?>" class="center" placeholder="Product name" name="ProductName"/>
                    </div>
                    <div class="row">
                        <span class="text-white">Quantity</span>
                        <input type="number" value="<?php echo $_GET['quantity']; ?>" class="center" placeholder="Quantity" name="Quantity"/>
                    </div>
                    <div class="row">
                        <span class="text-white">Price ₱</span>
                        <input type="number" class="center" value="<?php echo $_GET['price']; ?>" placeholder="Price" name="Price"/>
                    </div>
                    <div class="row">
                        <span class="text-white">Description</span>
                        <input type="text" class="center" value="<?php echo $_GET['description']; ?>" placeholder="Description" name="Description"/>
                    </div>
                    <button type="submit" class="btn green text-white center" name="btnSubmit">UPDATE</button>
                    <button type="button" onclick="window.location='AdminProductView.php'" class="btn pink text-white center">CANCEL</button>
                </form>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>
