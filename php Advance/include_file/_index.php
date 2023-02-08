<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section{
            margin:40px 20px;
        }
    </style>
</head>
<body style="background-color: lightgray">
    <?php echo include 'navbar.php' ?>
    <?php echo $customColor;?>
    <?php echo $customBgColor;?>
    <section>
        <h3>This is main body</h3>
        <p style="">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quasi corrupti maxime atque tempora vitae cupiditate, aliquid doloremque dolores saepe pariatur unde impedit quos recusandae dignissimos, quibusdam eos, nisi veritatis.
        </p>
    </section>
    <section>
        <h3>This is main body</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quasi corrupti maxime atque tempora vitae cupiditate, aliquid doloremque dolores saepe pariatur unde impedit quos recusandae dignissimos, quibusdam eos, nisi veritatis.
        </p>
    </section>
    <?php require 'footer.php'; ?>
</body>
</html>