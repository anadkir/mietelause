<!DOCTYPE html>
<html lang="fi">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Sovellus</title>
        <style>
            * {
                margin: 0;
                padding: 0;
            }
            body{
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                max-height: 100%;
                background-color: #dbbdbb; /* c0ced1 */
            }
            .card-my{
                display: inline-block;
                width: 242px;
            }
            .btn{
                width: 50%;
            }
            .bg-my {
                background-color: #c0ced1;
            }
            .badge-my {
                width: 100%;
                font-size: 20px;
                white-space: normal;
                font-weight: normal;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="card-my">
            <form action="user_program.php" method="post" class="text-center mb-3">
                <div class="mb-3"><input class="form-control" type="text" placeholder="Nimi" name="name"></div>
                <div class="mb-3"><input class="form-control" type="text" placeholder="Sukunimi" name="surname"></div>
                <button type="submit" class="btn btn-outline-light">Lähetä</button>
            </form>
            <div class="mb-3">
                <span class="badge bg-my badge-my">
                    <?php
                    $name = isset($_POST["name"]) && $_POST["name"] != "";
                    $surname = isset($_POST["surname"]) && $_POST["surname"] != "";

                    if($name && $surname){
                        echo "Hauskaa tutustua {$_POST["name"]} {$_POST["surname"]}";
                    }elseif(!$name && $surname){
                        echo "Sano sinun nimisi!";
                    }elseif($name && !$surname){
                        echo $_POST["name"] . ", sano sinun sukunimesi!";
                    }elseif($_SERVER["REQUEST_METHOD"] == "POST"){
                        echo "Tietoa ei löytänyt";
                    } ?>
                </span>
            </div>
        </div>
    </body>
</html>