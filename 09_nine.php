<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>what is username </title>
 
</head>

<body>

    <div class="form">
        <form action="" method="post" autocomplete="off">
            <div class="form-section">
                <input type="text" name="user">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    <?php
    if (isset ($_POST['user'])) {
        echo "<h1>your name is  " . $_POST['user'] . "</h1>";
    }

    ?>
</body>

</html>