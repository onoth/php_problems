<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Sell Product!</h1>
        <hr>
    </div>
    <div class="container">
        <form method="POST">
            <table>

                <tr>
                    <td>Product name</td>
                    <td>:</td>
                    <td>

                        <input type="text" name="product_name" placeholder="enter product name">

                    </td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td>:</td>
                    <td>

                        <input type="text" name="qty" placeholder="enter quatity">

                    </td>
                </tr>
                <tr>
                    <td>Unit Price</td>
                    <td>:</td>
                    <td>

                        <input type="text" name="price" placeholder="enter price">


                    </td>
                </tr>
                <tr>
                    <td>Discount (%)</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="disc" placeholder="discount">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="btn btn-sm btn-success">Calculate</button>
                        <button type="reset" class="btn btn-sm btn-danger">Cancel</button>
                    </td>

                </tr>




            </table>

        </form>
        <?php
        if (isset($_POST['product_name']) && isset($_POST['qty']) && isset($_POST['price']) && isset($_POST['disc'])) {
            $product_name = $_POST['product_name'];
            $qty = $_POST['qty'];
            $price = $_POST['price'];
            $disc = $_POST['disc'];
            $disc = $disc / 100;
            $total = $qty * $price * (1 - $disc);
            echo "<br><br><br>";
            echo "Total of $product_name: " . $total . " USD";
        }

        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>