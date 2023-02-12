<?php
$result = '';
if (isset($_POST['btn'])) {
    $amount = $_POST['amount'];
    $exchange_to = $_POST['exchange_to'];
    // echo $exchange_to;
    // echo "<br>";
    if ($exchange_to == 1) {
        $result = $amount * 4097.45;
        $result = ceil(number_format((float)$result, 2, '.', ''));
        $result = $result . " KHR";
    } else if ($exchange_to == 2) {
        $result = $amount / 4097.45;
        $result = number_format((float)$result, 2, '.', '');
        $result = $result . " USD";
    }

    // $result = $amount * $rate;
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Exchange rate</h1>
        <hr>

        <div class="container">
            <form method="POST">
                <table style="width:500px">
                    <tr>
                        <td>Currency</td>
                        <td></td>
                        <td>
                            <select name="exchange_to">
                                <option value="1">To KHR</option>
                                <option value="2">To USD</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Amount</td>
                        <td></td>
                        <td>
                            <input type="text" name='amount'>
                        </td>
                    </tr>

                    <tr>
                        <td>Result</td>
                        <td></td>
                        <td>
                            <input type="text" disabled value="<?php echo $result; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button name='btn' class="btn btn-sm btn-success">Submit</button>
                        </td>
                    </tr>

                </table>
            </form>
        </div>
    </div>




    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>