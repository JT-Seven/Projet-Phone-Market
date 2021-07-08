<?php

// include('Model/ChangeMypassword.php');
// if (isset($_GET['Password']) ) {
//   $user =  $_SESSION['User'];
//   $newpassword = $_GET['Password'];
//     $password = verifPassword($user);

//     if(md5($newpassword) != $password[0]['PASSWORD'] ){
//         updatePassword($user,$_GET['Password']);
      
//     $messag = '<p style=color:green;>Your password has been changed !</p>';
//     include('View/ChangeMypassword.php'); 
// }else{
//     $messag = '<p style=color:red;>The password cannot be identical to the old one !</p>';
//     include('View/ChangeMypassword.php'); 
// }   
// }else{
// include('View/ChangeMypassword.php');

// }


include('Model/ChangeMypassword.php');

if (isset($_GET['action']) && $_GET['action'] == "Change") {

    if (!empty($_GET['Password'])  && !empty($_GET['Confirmation-password'])) {
       
        $Password = $_GET['Password'];
        $CPassword = $_GET['Confirmation-password'];


            if ((preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/", $Password))) {

                if ($Password == $CPassword) {
                    $user =  $_SESSION['User'];
                      $newpassword = $_GET['Password'];
                        $password = verifPassword($user);
                    
                        if(md5($newpassword) != $password[0]['PASSWORD'] ){
                            updatePassword($user,$_GET['Password']);
                            $email = $_SESSION['Email'];
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
                        $error = '<p style=color:green;>Your password has been changed !</p>';
                    }else{
                        $error = '<p style=color:red;>The password cannot be identical to the old one !</p>';
                    }   
                } else {
                    $error = '<p style="color: red;">   The two password do not match<p>';
                }
            } else {
                $error = '<p style="color: red;"> Password is invalid <p>';
            }
       
    } else {
        $error = '';
    }
}

include('View/ChangeMypassword.php');
