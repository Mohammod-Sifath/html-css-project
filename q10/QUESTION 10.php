<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $color = array('white', 'green', 'red');
    ?>
    output :
    <ol type="A">
        <li ><?php echo $color[0].",".$color[1].",".$color[2] ?></li>
        <li></li>
    </ol>
    <br>
    <ul>
        <li ><?php echo $color[0] ?></li>
        <li ><?php echo $color[1] ?></li>
        <li ><?php echo $color[2] ?></li>
    </ul>
</body>
</html>