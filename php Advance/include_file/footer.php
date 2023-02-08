<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
        }
        footer{
            margin: 0;
            padding: 20px;
            background-color:coral;
        }
        .nav-container{
            display: flex;
            justify-content: center;
            /* background-color: goldenrod; */
            padding: 30px;
            margin: 0;
        }
        .nav-container > div{
            margin-left: 20px;
        }
        .nav-link{
            text-decoration: none;
            color:aliceblue;
        }

    </style>
</head>
<body>
   <footer>
   <h5>PHP include and require learn Footer</h5>
    <div class="nav-container">
        <div>
            <a class="nav-link" href="./_index.php">Home</a>
        </div>
        <div>
            <a class="nav-link" href="www.google.com">Google</a>
        </div>
        <div>
            <a class="nav-link" href="www.facebook.com">Facebook</a>
        </div>
        <div>
            <a class="nav-link" href="www.youtube.com">Youtube</a>
        </div>
    </div>
    <p>&COPY; Copy Reserved to Arif. <?php echo "2020 to ", date('Y')?></p>
   </footer>
</body>
</html>