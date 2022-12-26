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
    <h1>Find age</h1>
    <hr>
    <div class="container">
        <form method="POST">
            <input class="ml-4" type="text" name="born_year" placeholder="enter born year">
            <button class="btn btn-sm btn-success">Submit</button>
        </form>
    </div>

    <div class="container">
        <?php
        if (isset($_POST['born_year'])) {
            $born_year = $_POST['born_year'];
            $cur_year = date("Y");
            $age = $cur_year - $born_year;
            if ($age >= 1 && $age <= 20) {
                echo "<p style='color:blue'>" . $age . " years old</p>";
            } elseif ($age >= 20 && $age <= 30) {
                echo "<p style='color:green'>" . $age . " years old</p>";
            } else {
                echo "<p style='color:red'>" . $age . " years old</p>";
            }
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>