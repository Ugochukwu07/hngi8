<!-- Beginning of the html tages -->
<html>
    <head>
        <!-- My CSS3 tag, styles are added below -->
        <style>
            body{
                padding: 0;
                margin: 0;
                font-family: 'san-serif';
                position: relative;
            }
            .name{
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
                padding: 10px;
                box-shadow: 2px 3px 4px #eeeeee;
                font-size: 20px;
            }
        </style>
    </heade>
    <body>
        <!-- Body of the html page where my name will echo -->
        <div class="name">
            <p><?php
                    //below is a php code to echo/print my name on the screen
                    echo 'Ekwueme Ugochukwu Emmanel'; 
                ?></p>
        </div>
    </body>
</html>