<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Café !</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        .cup-container {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .ip-hostname, h1 {
            font-family: Geneva, Tahoma, Verdana, sans-serif;
        }

        body {
            height: 100%;
            width: 100%;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
</head>

<body>
    <center>
        <br>
        <div class="cup-container center" style="padding-top: 5%">
            <div class="cup">
                <span class="steam "></span>
                <span class="steam "></span>
                <span class="steam "></span>
                <div class="cup-handle "></div>
            </div style="margin-bottom: 10px;">
        </div>

        <footer style="padding-top: 10px">
            <div class="ip-hostname">
                <p>IP Address:
                    <?php echo $_SERVER['SERVER_ADDR']; ?>
                </p>
                <p>Pod:
                    <?php echo gethostname(); ?>
                </p>
            </div>
        </footer>
    </center>
</body>

</html>