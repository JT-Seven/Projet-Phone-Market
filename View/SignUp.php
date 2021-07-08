<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Connexion</title>
</head>

<body>
    <div class="container-signup">
        <form method="POST" id="Sign up">
            <h1>Sign Up</h1>
            <?php if (!empty($error)) { ?>
                <ul>
                    <?php foreach($error as $valerror) { ?>
                        <li style="color: red;"><?php echo $valerror; ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <div class="message" id="message">
            <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" color="black" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle">
                <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                <line x1="12" y1="9" x2="12" y2="13"></line>
                <line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                Touche majuscule activée
            </div><BR>
            <b style="color:red ; font-size: 10px" ;>* Required Field</b><br>
            <label><b>Name *</b></label>
            <input type="text" name="Name" placeholder="Name(At least 2 characters)" id="Name" value="<?php if (isset($Name)) { echo $Name; } ?>">
            <p style="color: red;" id="NameError"></p>
            <p style="color: #27ae27;" id="NameValid"> </p>
            <label><b>Surname *</b></label>
            <input type="text" name="Surname" placeholder="Surname(At least 2 characters)" id="Surname" value="<?php if (isset($Surname)) { echo $Surname; } ?>">
            <p style="color: red;" id="SurnameError"></p>
            <p style="color: #27ae27;" id="SurnameValid"></p>
            <label><b>Email *</b></label>
            <input type="text" name="Email" placeholder="Exemple@domaine.com" id="Email" value="<?php if (isset($Email)) { echo $Email; } ?>">
            <p style="color: red;" id="EmailError"></p>
            <p style="color: #27ae27;" id="EmailValid"></p>
            <label><b>Confirmation email *</b></label>
            <input type="text" name="confirmation-email" placeholder="confirmation email" id="confirmation email" value="<?php if (isset($CEmail)) { echo $CEmail; } ?>">
            <p style="color: red;" id="CemailError"></p>
            <p style="color: #27ae27;" id="CemailValid"></p>
            <label><b>Address *</b></label>
            <input type="text" name="Address" placeholder="Number and street" id="Address"value="<?php if (isset($Address)) { echo $Address; } ?>">
            <p style="color: red;" id="AddressError"></p>
            <p style="color: #27ae27;" id="AddressValid"></p>
            <label><b>zip code *</b></label>
            <input type="text" name="zip-code" placeholder="zip code" id="zip-code" value="<?php if (isset($ZipCode)) { echo $ZipCode; } ?>">
            <p style="color: red;" id="zipcodeError"></p>
            <p style="color: #27ae27;" id="zipcodeValid"></p>
            <label><b>City *</b></label><br>
            <select type="text" name="City" id="City">
                <option value="" selected disabled>Choose the city that corresponds to your zip code</option>
                <option name="valueCity"><?php if(isset($city)) { echo $city; } ?></option>
            </select><br>
            <label><b>Password *</b></label>
            <input type="password" name="Password" placeholder="Password" id="Password">
            <p style="color: red;" id="PasswordError"></p>
            <p style="color: #27ae27;" id="PasswordValid"></p>
            <div class="password-icon1">
                <i data-feather="eye"></i>
                <i data-feather="eye-off"></i>
            </div>
            <label><b>Confirmation password *</b></label>
            <input type="password" name="Confirmation-password" placeholder="Confirmation password" id="Confirmation password">
            <p style="color: red;" id="CpasswordError"></p>
            <p style="color: #27ae27;" id="CpasswordValid"></p>
            <p style="color:#555; ; font-size: 10px" ;> At least 8 characters (and less than 15 characters) <br>
                Contains at least 1 number,
                at least 1 lowercase letter,
                and at least 1 uppercase letter.
                <input type="submit" name="action" value="Sign up">
            <P style="color:black; ; font-size: 16px">Member? <a href="index.php?action=Login">Login now</a><br></P>
            <p style="color: red;" id="GenralError"></p>
            
        </form>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace();
    </script>


</body>

</html>
<?php
include_once('js/city-address.php');
include('Css\SignUp.php');
include_once('js/IconeEye.php');
include_once('js/DetectMaj.php');
include_once('js/testJsSignUp.php');
?>