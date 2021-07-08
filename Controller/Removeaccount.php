<?php
include('Model/Removeaccount.php');
if($_GET['action'] == 'RemoveUser'){
   $email = $_GET['Email'];
   $message = '<html>
   <body>
       <div align="center">
           
           <P>Your account has been deleted !</P><BR>
           <img src="https://d1eh9yux7w8iql.cloudfront.net/carousel_images/Buyback_2021_FR_CarouselNormal4.gif"/>

           
       </div>
   </body>
</html>';
include_once("Model/sendmail.php");
    $iduser = $_GET['id'];
  
    deleteUser($iduser);
    
    header('Location: index.php?action=Removeaccount');
    
}else{
include('View/Removeaccount.php');

}
