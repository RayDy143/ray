
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=width-device,initial-scale=1.0">
        <link rel="stylesheet" href="css/mystyle.css">

        <title>Adding of Products</title>
    </head>
    <body>
        <header>

        </header>
        <main>
            <div class="login-box center">
                <form action="functions/AddProduct.php" method="post" name="ProductForm">
                    <h2 class="text-white text-center">ADD NEW PRODUCT</h1>
                    <div class="row">
                        <input type="text" class="center" placeholder="Product name" name="ProductName"/>
                    </div>
                    <div class="row">
                        <input type="number" class="center" placeholder="Quantity" name="Quantity"/>
                    </div>
                    <div class="row">
                        <input type="number" class="center" placeholder="Price" name="Price"/>
                    </div>
                    <div class="row">
                        <input type="text" class="center" placeholder="Description" name="Description"/>
                    </div>
                    <button type="submit" class="btn green text-white center" name="btnSubmit">ADD</button>
                    <button type="button" onclick="window.location='Views/Admin/product_view.php'" class="btn pink text-white center">CANCEL</button>
                </form>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>
