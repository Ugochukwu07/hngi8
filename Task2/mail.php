<!DOCTYPE html>
<!-- My mail template -->
<html lang="en">
    <head>
        <title>Mail</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <style>
        body, html{
            background: #252627;
        }
        body{
            max-width: 700px;
            min-width: 300px;
            padding: 10px;
            color: #707070;
            margin: auto;
        }
        header, footer{
            text-align: center;
        }
        main{
            color: white;
        }
        </style>
    </head>
    <body>
        <header>
            <h1>#subject#</h1>
        </header>
        <main>
            #message#
            <br>
            <p><b>Full Name:</b> #fullName#</p>
            <p><b>Email:</b> #email#</p>
            <p><b>Phone:</b> #phone#</p>
        </main>
        <footer>
            <hr>
            <i>If you recived this email by mistake. Contact Us</i><br>
            ekwuemeugochukwu83@gmail.com | +2348143440606
        </footer>
    </body>
</html>