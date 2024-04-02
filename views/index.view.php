<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pasakumi</title>
</head>
<body>

    
<?php require("components/navBar.php") ?>

    
    <?php
    foreach($pienakumi as $pienakums) {
        ?> <ul> <?php
        ?> <li> <h2 style="margin: 0"><?php echo htmlspecialchars($pienakums['name'])  ?> </h2></li> <?php
        ?> <li> Laiks:  <?php echo htmlspecialchars($pienakums['date'])  ?> </li> <?php
        ?> <li> Vieta:  <?php echo htmlspecialchars($pienakums['place'])  ?> </li> <?php
        ?> <form method="POST"> <?php
        ?> <button name="delete" value="<?php echo $pienakums['id'] ?>" >X</button> <?php
        ?> </form> <?php
        ?> <form method="get" action="/controller/edit.php"> <?php
        ?> <button name="id" value="<?php echo $pienakums['id'] ?>" >edit</button> <?php
        ?> </form> <?php
        ?> </ul> <?php
    };
    ?>


    
</body>
</html>