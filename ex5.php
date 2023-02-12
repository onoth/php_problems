<?php
$result = "";
if (isset($_POST['btn'])) {
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $start_date = date_create($start_date);
    $end_date = date_create($end_date);
    var_dump($start_date);
    var_dump($end_date);
    $day = $start_date->diff($end_date);
    $result = $day->d . " days";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diff Date</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Diff Date</h1>
        <hr>
        <form method="POST">
            <table>
                <tr>
                    <td>Start</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="start_date">
                    </td>
                </tr>
                <tr>
                    <td>End</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="end_date">
                    </td>
                </tr>
                <tr>
                    <td>Result</td>
                    <td>:</td>
                    <td>
                        <input type="text" disabled value="<?php echo $result; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button class="btn btn-sm btn-success">Find</button>
                        <button type="reset" class="btn btn-sm btn-danger">Cancel</button>
                    </td>
                </tr>

            </table>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>