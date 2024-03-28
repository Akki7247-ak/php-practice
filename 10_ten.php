<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>


        <center>
        <form action="" method="post">
                First Number: <input type="number" name="num1" value="0">
                <br>
                <br>
                Second Number: <input type="number" name="num2" value="0">
                <input type="submit" name="sub" value="+">
                <input type="submit" name="sub" value="-">
                <input type="submit" name="sub" value="*">
                <input type="submit" name="sub" value="/">
                <br>
                <br>
                <?php 
                if(isset($_POST['sub'])){
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];

                        $cal = $_POST['sub'];

                        if($cal == "+"){
                                $ans = $num1 + $num2;
                        }
                        else if($cal == "-"){
                                $ans = $num1 - $num2;
                        }
                        else if($cal == "*"){
                                $ans = $num1 * $num2;
                        }
                        else if($cal == "/"){
                                $ans = $num1 / $num2;
                        }
                        else if($cal == ""){
                                echo "please enter number";
                        }
                }
                ?>
                Result : <input type="text" value="<?php echo $ans; ?>">
        </form>
        </center>


</body>

</html>