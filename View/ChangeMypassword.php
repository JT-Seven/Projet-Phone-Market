<!-- CHANGE MY PASSWORD -->
                
<div class="container-change-password">
            <h2 class="titre">Change my password</h2>
            <div class="formulaire contenu">
            <?php if(isset($error)) { echo "<p class='error'>$error</p>"; } ?>
                <p class='error fields' style="color: red;" id="GenralError"></p>
                <div class="form">
                    <form method='GET' action="index.php" id="NewPassword">
                        <div class="field">
                            <label>New password </label>
                            <input type="password" name="Password" placeholder="New password"id="Password"> <p style="color: red;" id="PasswordError"></p> <p style="color: #27ae27;" id="PasswordValid"></p>
                        </div>
                        <div class="field">
                            <label>Confirmation password</label>
                            <input type="password" name="Confirmation-password" placeholder="Confirmation password" id="Confirmation password"><p style="color: red;" id="CpasswordError"></p><p style="color: #27ae27;" id="CpasswordValid"></p>
                        </div>
                        <div class="condition">
                            <h4>Condition :</h4>
                            <p>At least 8 characters (and less than 15 characters)<br>
                            Contains at least 1 number,
                            at least 1 lowercase letter,
                            and at least 1 uppercase letter.</p>
                        </div>
                        <input class="button" type="submit" name="action" value="Change">
                    </form>
                </div>
            </div>
        </div>
        <!-- END CHANGE MY PASSWORD -->
<?php
include_once('Css/ChangeMypassword.php');
include('js/testJsChangeMypassword.php');

