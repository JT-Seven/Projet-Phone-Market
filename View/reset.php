<div class="container-forgot-password">
    <h2 class="titre">Forgot my password</h2>
    <div class="formulaire contenu">
        <?php if(isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <p class='error fields' style="color: red;" id="GenralError"></p>
        <div class="form">
            <form action="" method="GET" id="Reset">
                
                <div class="field">
                    <label>Email <span>*</span></label>
                    <img src="img/letter.svg" class="logo-input" alt="">
                    <input type="text" name="Email" placeholder="Email" id="Email" value="<?php if (isset($_GET['Email'])) { echo '' . $_GET['Email'] . ''; } ?>">                    
                    <p style="color: red;" id="EmailError"></p>
                    <p style="color: #27ae27;" id="EmailValid"></p>
                </div>
                
                <div class="field">
                    <label>New password <span>*</span></label>
                    <img src="img/cadenas.svg" class="logo-input" alt="">
                    <input type="password" name="Password" placeholder="Password" id="Password" value="<?php if (isset($_GET['Password'])) { echo '' . $_GET['Password'] . ''; } ?>">
                    <p style="color: red;" id="PasswordError"></p>
                    <p style="color: #27ae27;" id="PasswordValid"></p>
                </div>
                
                <div class="field">
                    <label>Confirmation password <span>*</span></label>
                    <img src="img/cadenas.svg" class="logo-input" alt="">
                    <input type="password" name="Confirmation-password" placeholder="Confirmation password" id="Confirmation password" value="<?php if (isset($_GET['Confirmation-password'])) { echo '' . $_GET['Confirmation-password'] . ''; } ?>">                    
                    <p style="color: red;" id="CpasswordError"></p>
                    <p style="color: #27ae27;" id="CpasswordValid"></p>
                </div>

                <div class="conditions">
                    <h4>Condition :</h4>
                    <p>At least 8 characters (and less than 15 characters)<br>
                    Contains at least 1 number,
                    at least 1 lowercase letter,
                    and at least 1 uppercase letter.</p>
                </div>

                <input type="submit" class="button" name="action" value="Update password">
                <div class="signUp">
                    <p>You want to create an account <a href="index.php?action=Sign up">Sign up now</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
    

<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace();
</script>
<?php
include('Css/Reset.php');
include('js/IconeEye.php');
include_once('js/testJsReset.php');
