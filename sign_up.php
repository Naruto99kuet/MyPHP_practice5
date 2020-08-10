<?php

    //check if the user has clicked the submit button

    if(isset($_POST['submit'])) {
        
        //include database connection
        include_once 'dbh.php';


        //get the data from signup form
        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        // checking if inputs are empty
        if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) ) {
            header("Location: /home.php?signup=empty");
            exit();
        }
        else {
            //check if characters are valid
            if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
                header("Location: /home.php?signup=char");
                exit();
            }
            else {
                //check if email is valid
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: /home.php?signup=email&first=$first&last=$last&uid=$uid");
                    exit();
                }
                else {
                    header("Location: /home.php?signup=success");
                    exit();
                }

            }

        }
    }
    else {
        header ("Location: /home.php");
        exit();
    }

?>
