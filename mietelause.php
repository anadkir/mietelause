<!DOCTYPE html>
<html lang="fi">
    <head>
        <meta charset="utf-8">
        <title>Mietelause</title>
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                display: flex;
                background-color: #c0ced1; /* dbbdbb */
                min-height: 100vh;
                align-items: center;
                justify-content: center;
            }
            .card{
                background-color: #51648c;
                color: #dbbdbb;
                border-radius: 15px;
                width: 452px;
                height: 94px;
                border: #dbbdbb 3px solid;
                position: relative;
            }
            .card:hover .card__front {
                transform: rotateY(180deg);
            }
            .card:hover .card__back {
                transform: rotateY(360deg);
            }
            .card__front{
                z-index: 2;
            }
            .card__back{
                transform: rotateY(180deg);
                z-index: 3;
            }
            .card__front, .card__back {
                transition: 0.6s;
                transform-style: preserve-3d;
                backface-visibility: hidden;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .card__wrapper{
                padding: 10px 15px;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .card__text{
                width: 100%;
                display: flex;
                align-items: flex-end;
                justify-content: space-between;
            }
            .quote{
                font-size: 30px;
            }
            .name{
                font-size: 28px;
            }
            .date{
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <div class="card__front">
                <div class="card__wrapper">
                    <p class="quote"><?php echo '"On ihanaa olla tekemättä mitään"'; ?></p>
                </div>
            </div>
            <div class="card__back">
                <div class="card__wrapper">
                    <p class="card__text">
                        <span class="name"><?php echo 'Anastasiia Pullinen'; ?></span>
                        <span class="date"><?php echo date("d.m.Y"); ?></span>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
