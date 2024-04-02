<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require("components/navBar.php") ?>
    <form method="post">
        <input type="text" name="name" placeholder="event name">
        <input type="text" name="place" placeholder="place">
        <input type="date" name="date">
        <button>submit</button>
        <?php echo $error ?? "" ?>
    </form>

</body>
</html>