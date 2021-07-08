<?php
include_once('Model/Reset.php');

if (isset($_GET['action']) && $_GET['action'] == "Update password") {

    if (!empty($_GET['Password']) && !empty($_GET['Email']) && !empty($_GET['Confirmation-password'])) {
       
        $Email = htmlspecialchars($_GET['Email']);
        $Password = $_GET['Password'];
        $CPassword = $_GET['Confirmation-password'];

        if ((preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $Email))) {

            if ((preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/", $Password))) {

                if ($Password == $CPassword) {
                    $verif = verif($_GET['Email']);

                    if ($verif == 1) {
                        $newpassword = $_GET['Password'];
                        $password = VerifPassword($_GET['Email']);
                        if(md5($newpassword) != $password[0]['PASSWORD'] ){
                            $email = $_GET['Email'];

                        $Password = md5($_GET['Password']);
                        resetMdp($Password, $email);
                        $message = '<html>
                        <body>
                            <div align="center">
                            <br />
                                <P>Your password modification has been saved!</P><BR>
                                <img src="https://d1eh9yux7w8iql.cloudfront.net/carousel_images/Buyback_2021_FR_CarouselNormal4.gif"/>
                    
                            </div>
                        </body>
                    </html>';
                    include_once("Model/sendmail.php");
                        header('Location: index.php?action=Login');
                        }else{
                            $error = '<p style=color:red;>The password cannot be identical to the old one !</p>';

                        }
                    }else{
                        $error = "<p style='color: red;'> This account doesn't exists <p>";

                    }
                } else {
                    $error = '<p style="color: red;">   The two password do not match<p>';
                }
            } else {
                $error = '<p style="color: red;"> Password is invalid <p>';
            }
        } else {
            $error = '<p style="color: red;"> Email is invalid <p>';
        }
    } else {
        $error = '';
    }
}

include('View/Reset.php');
