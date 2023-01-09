<?php
$result = "";
if (isset($_POST['btn'])) {
    $from_unit = $_POST['from'];
    $to_unit = $_POST['to'];
    $factor = $_POST['factor'];
    $result = $factor * $from_unit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ex4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Unit conversion</h1>
        <hr>
    </div>
    <div class="container">
        <form method="POST">
            <table>
                <tr>
                    <td>From Unit</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="from">
                    </td>
                </tr>
                <tr>
                    <td>To Unit</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="to">
                    </td>
                </tr>
                <tr>
                    <td>Factor</td>
                    <td>:</td>
                    <td><input type="text" name="factor"></td>
                </tr>
                <tr>
                    <td>Result</td>
                    <td>:</td>
                    <td>
                        <input type="text" readonly value="<?php echo $result . " $to_unit" ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button name='btn' class="btn btn-sm btn-success">Convert</button>
                        <button type="reset" class="btn btn-sm btn-danger">Cancel</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>