<!-- Beginning of the html tages -->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Ekwueme Ugochuwu | HNGi8</title>
        <!-- My CSS3 tag, styles are added below -->
        <style>
            body{
                background: #f5f5f5ee;
                padding: 0;
                margin: 0;
                font-family: sans-serif;
                position: relative;
            }
            .name{
                background: #ffffff;
                position: absolute;
                text-align: center;
                width: 60%;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                padding: 10px;
                box-shadow: 2px 3px 4px #dadada;
                font-size: 17px;
            }
            footer{
                position: absolute;
                bottom: 0;
                font-size: 10px;
                text-align: center;
                width: 100%;
            }
        </style>
    </heade>
    <body>
        <!-- Body of the html page where my name will echo -->
        <div class="name">
            <p><?php
                    //below is a php code to echo/print my name on the screen
                    echo 'Ekwueme Ugochukwu Emmanuel'; 
                ?></p>
        </div>
        <footer>
            <span>@copyright 2021 Ekwueme Ugochukwu | HNGi8</span>
        </footer>
    </body>
</html>