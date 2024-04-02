<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require("components/navBar.php") ?>
    <h1>Edit post stuff</h1>

    <form>
        <input type="text" value='<?php echo $result[0]["name"] ?>'>
        <input type="text" value='<?php echo $result[0]["place"] ?>'>
        <input type="text" value='<?php echo $result[0]["date"] ?>'>
        <button>submit changes</button>
    </form>
</body>
</html>