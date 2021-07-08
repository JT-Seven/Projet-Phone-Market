<section class="zone-register">
    <div class="container-register" id="register">
        <div class="form-container sign-up-container">
            <div class="form">
                
                <form method="POST" id="Sign up">
                    <div class="msg-error">
                        <?php if (!empty($error)) { ?>
                            <?php $error["empty"] = " "; ?>
                            <ul>
                                <?php foreach($error as $valerror) { ?>
                                    <?php if(isset($error["acount"])) { ?>
                                            <li style="color: red;"><?php echo $error["empty"]; ?></li>
                                    <?php } else { ?>
                                        <li style="color: red;"><?php echo $valerror; ?></li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>

                    <div class="message" id="message">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" color="black" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        Touche majuscule activée
                    </div>
                    <div class="scroll">
                        <div class="scroll-contents">
                            <h2>Sign Up</h2>
                            <!-- CHAMPS INPUT -->
                            <div class="field">
                                <label>Name <span>*</span></label>
                                <img src="img/user-register.svg" class="logo-input" id="letter2" alt="">
                                <input type="text" name="Name" placeholder="Name(At least 2 characters)" id="Name" value="<?php if (isset($Name)) { echo $Name; } ?>">
                                <p style="color: red;" id="NameError"></p>
                                <p style="color: #27ae27;" id="NameValid"> </p>
                            </div>
                            
                            <div class="field">
                                <label>Surname <span>*</span></label>
                                <img src="img/user-register.svg" class="logo-input" alt="">
                                <input type="text" name="Surname" placeholder="Surname(At least 2 characters)" id="Surname" value="<?php if (isset($Surname)) { echo $Surname; } ?>">
                                <p style="color: red;" id="SurnameError"></p>
                                <p style="color: #27ae27;" id="SurnameValid"></p>
                            </div>
                            
                            <div class="field">
                                <label>Email <span>*</span></label>
                                <img src="img/letter.svg" class="logo-input" alt="">
                                <input type="text" name="Email" placeholder="Exemple@domaine.com" id="Email" value="<?php if (isset($Email)) { echo $Email; } ?>">
                                <p style="color: red;" id="EmailError"></p>
                                <p style="color: #27ae27;" id="EmailValid"></p>
                            </div>
                            
                            <div class="field">
                                <label>Confirmation Email <span>*</span></label>
                                <img src="img/letter.svg" class="logo-input" alt="">
                                <input type="text" name="confirmation-email" placeholder="confirmation email" id="confirmation email" value="<?php if (isset($CEmail)) { echo $CEmail; } ?>">
                                <p style="color: red;" id="CemailError"></p>
                                <p style="color: #27ae27;" id="CemailValid"></p>
                            </div>
                            
                            <div class="field">
                                <label>Address <span>*</span></label>
                                <img src="img/map.svg" class="logo-input" alt="">
                                <input type="text" name="Address" placeholder="Number and street" id="Address"value="<?php if (isset($Address)) { echo $Address; } ?>">
                                <p style="color: red;" id="AddressError"></p>
                                <p style="color: #27ae27;" id="AddressValid"></p>
                            </div>
                            
                            <div class="field">
                                <label>Zip Code <span>*</span></label>
                                <img src="img/zip-code.svg" class="logo-input" alt="">
                                <input type="text" name="zip-code" placeholder="zip code" id="zip-code" value="<?php if (isset($ZipCode)) { echo $ZipCode; } ?>">
                                <p style="color: red;" id="zipcodeError"></p>
                                <p style="color: #27ae27;" id="zipcodeValid"></p>
                            </div>

                            <div class="field">
                                <label>City <span>*</span></label>
                                <select type="text" name="City" id="City">
                                    <option value="" selected disabled>Choose the city that corresponds to your zip code</option>
                                    <option name="valueCity"><?php if(isset($city)) { echo $city; } ?></option>
                                </select>
                            </div>
                            
                            <div class="field">
                                <label>Password <span>*</span></label>
                                <img src="img/cadenas.svg" class="logo-input" alt="">
                                <input type="password" name="Password" placeholder="Password" id="Password">
                                <p style="color: red;" id="PasswordError"></p>
                                <p style="color: #27ae27;" id="PasswordValid"></p>
                                <div class="password-icon">
                                    <i data-feather="eye"></i>
                                    <i data-feather="eye-off"></i>
                                </div>
                            </div>
                            
                            <div class="field" id="conf">
                                <label>Confirmation Password <span>*</span></label>
                                <img src="img/cadenas.svg" class="logo-input" alt="">
                                <input type="password" name="Confirmation-password" placeholder="Confirmation password" id="Confirmation password">
                                <p style="color: red;" id="CpasswordError"></p>
                                <p style="color: #27ae27;" id="CpasswordValid"></p>
                            </div>
                            <div class="before-btn">
                                <p class="conditions"> At least 8 characters (and less than 15 characters) 
                                        Contains at least 1 number,
                                        at least 1 lowercase letter,
                                        and at least 1 uppercase letter.
                                <p class="member-login">Member ? <a href="#" id="signIn2">Login now</a></p>
                                <p style="color: red;" id="GenralError"></p>
                            </div>
                            <input id="valid" class="button" type="submit" name="action" value="Sign up">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="form-container sign-in-container">
            <div class="form">
                <div class="msg-error2">
                    <?php if (!empty($error)) { ?>
                        <ul>
                            <?php if(isset($error["acount"])) { ?>
                                <p style="color: red;"><?php echo $error["acount"]; ?></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>

                <form action="" method="POST">
                    <h2>Login</h2>
                    <div class="field">
                        <label>Email</label>
                        <img src="img/letter.svg" class="logo-input" id="letter" alt="">
                        <input type="text" name="Email" placeholder="Email"value="<?php if (isset($_POST['Email'])) { echo '' . $_POST['Email'] . ''; } ?>">
                        <p style="color: red;" id="NameError"></p>
                        <p style="color: #27ae27;" id="NameValid"> </p>
                    </div>
                    
                    <div class="field">
                        <label>Password</label>
                        <img src="img/cadenas.svg" class="logo-input" id="pass" alt="">
                        <input type="password" id="password-connect" name="Password" placeholder="Password" required>
                        <p style="color: red;" id="SurnameError"></p>
                        <p style="color: #27ae27;" id="SurnameValid"></p>
                    </div>
                    <div class="forgot-password">
                        <a href="index.php?action=Update password" class="forgot-pass">Forgot your password ?</a>
                    </div>
                    
                    <input id="valid" class="button" type="submit" name="action" value="Login">
                    <div class="member">
                        Not a member ?&nbsp;<a href="#" id="signUp2"> Sign up now</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h2>Welcome Back!</h2>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h2>Hello, Friend!</h2>
                    <p>Enter your personal data to start selling or buying a product now with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ICON SCRIPT -->
<script src="https://unpkg.com/feather-icons"></script>
<script>
  feather.replace();
</script>

<?php include_once("Css/Register.php"); ?>
<?php include_once("js/Register.php"); ?>
<?php include_once('js/IconeEye.php'); ?>
<?php include_once('js/DetectMaj.php'); ?>
<?php include_once('js/testJsSignUp.php'); ?>
<?php include_once('js/city-address.php'); ?>