<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$action = $_POST["action"];
$result = null;

if(!is_numeric($num1) || !is_numeric($num2)) {
    $result = "Syötä numerot!";
}elseif($num1 && $num2){
    if($action == "plus"){
        $result = $num1 + $num2;
    }elseif ($action == "minus"){
        $result = $num1 - $num2;
    }elseif ($action == "multiply"){
        $result = $num1 * $num2;
    }elseif ($action == "split"){
        $result = $num1 / $num2;
    }else{
        $result = "Valitse toiminto.";
    }
}
?>

<!DOCTYPE html>
<html lang="fi">
    <head>
        <meta charset="utf-8">
        <title>Laskin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <style>
            body{
                background-color: #ffe5d0;
            }
            .form-control{
                max-width: 300px;
            }
            .r {
                margin-left: 5px;
            }
        </style>
    </head>
    <body>
        <h1 class="r">Tervetuloa laskemaan!</h1>
        <form action="calc.php" method="post">
            <div class="d-flex align-items-center">
                <div class="mx-2">
                    <input type="number" class="form-control form-control" id="num1" name="num1" placeholder="Syötä numero" required>
                </div>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mx-2" role="group" aria-label="First group">
                        <input type="radio" class="btn-check" id="action-plus" autocomplete="off" name="action" checked value="plus">
                        <label class="btn btn-info" for="action-plus">+</label>

                        <input type="radio" class="btn-check" id="action-minus" autocomplete="off" name="action" value="minus">
                        <label class="btn btn-info" for="action-minus">-</label>

                        <input type="radio" class="btn-check" id="action-multiply" autocomplete="off" name="action" value="multiply">
                        <label class="btn btn-info" for="action-multiply">*</label>

                        <input type="radio" class="btn-check" id="action-split" autocomplete="off" name="action" value="split">
                        <label class="btn btn-info" for="action-split">/</label>
                    </div>
                </div>
                <div class="mx-2">
                    <input type="number" class="form-control" id="num2" name="num2" placeholder="Syötä numero" required>
                </div>
                <button class="btn btn-outline-info" type="submit">Laske</button>
                <div class="fs-5 r">
                    <?= $result ?>
                </div>
            </div>
        </form>
    </body>
</html>

