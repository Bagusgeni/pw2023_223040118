<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        .container{
            width: 90%
        }

        .kotak{
            width: 50px;
            height: 50px;
            background-color: yellow ;
            text-align: center;
            line-height: 50px;
            display: inline-block;
            margin-right:-5px;
            border:1px solid black;
        }
    </style>
</head>
<body>
    <?php for ($i = 10 ; $i >= 1 ; $i--) : ?>
        <?php for ($b=1; $b <= $i; $b++) :?>
        <div class="kotak"><?= $b; ?> </div>
        <?php endfor; ?>
        <br>
    <?php endfor; ?>
    
</body>
</html>