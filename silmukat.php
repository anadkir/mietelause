
<!DOCTYPE html>
<html lang="fi">
    <head>
        <title>Silmukat</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <style>
            body{
                background-color: #FFEFD5;
            }
            .container{
                margin-top: 30px;
            }
            button{
                margin-top: 10px;
            }
            .result{
                background-color: #E0FFFF;
                max-width: 200px;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-2">
                <form action="silmukat.php" method="post">
                    <input type="number" class="form-control form-control" id="num1" name="num1" placeholder="Syötä numero" required autocomplete="off">
                    <button class="btn btn-outline-info" type="submit">Laske</button>
                </form>
            </div>
            <div class="col">
                <div class="result border border-info">
                    <?php
                    $num1 = $_POST["num1"];
                    $num2 = 1;

                    if(is_numeric($num1)) {
                        for ($num2 = 1; $num2 <= 10; $num2++) {
                            $result = $num1 * $num2;
                            echo "<p>$num1 * $num2 = {$result} </p>";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>
