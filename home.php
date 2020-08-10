<?php
    include_once 'dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>


<body>

    <h2>Sign up</h2>

    <form action="sign_up.php" method="POST">

        <?php

        if(isset($_GET['first'])) {
            $first = $_GET['first'];
            echo '<input type="text" name="first" placeholder="First Name" value="'.$first.'"><br>';
        }
        else {
            echo '<input type="text" name="first" placeholder="First Name"><br>';
        }

        if(isset($_GET['last'])) {
            $last = $_GET['last'];
            echo '<input type="text" name="last" placeholder="Last Name" value="'.$last.'"><br>';
        }
        else {
            echo '<input type="text" name="last" placeholder="Last Name"><br>';
        }

        ?>

        <input type="text" name="email" placeholder="Email">
        <br>

        <?php

        if(isset($_GET['uid'])) {
            $uid = $_GET['uid'];
            echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'"><br>';
        }
        else {
            echo '<input type="text" name="uid" placeholder="Username"><br>';
        }

        ?>

        <input type="password" name="pwd" placeholder="Password">
        <br>
        <button type = "submit" name="submit">Sign up</button>

    </form>

    <?php

        if(!isset($_GET['signup'])) {
            exit();
        }
        else {
            $signupCheck = $_GET['signup'];

            if($signupCheck == "empty") {
                echo "<p>You didn't fill in all fields!</p>";
                exit();
            }
            elseif($signupCheck == "char") {
                echo "<p>Invalid characters!</p>";
                exit();
            }
            elseif($signupCheck == "email") {
                echo "<p>Invalid email!</p>";
                exit();
            }
            elseif($signupCheck == "success") {
                echo "<p>You've been signed up!</p>";
                exit();
            }
        }

    ?>




</body>





</html>

