<!-- EDIT PROFIL -->
<div class="zone-edit-profil" id="zone"></div>
    <div class="container-edit-profil" id="edit">
        <div class="formulaire">
            <h2>Edit profil</h2>
            <?php if(isset($error)) { echo "<p class='error'>$error</p>"; } ?>
            <p class='error fields' style="color: red;" id="GenralError"></p>
            <div class="form">
                <form method="POST" action=""  enctype="multipart/form-data" id="Edit-profil">
                <div class="field">
                    <label>Name</label>
                    <input type="text" name="Name" placeholder="Name(At least 2 characters)" id="Name">
                    <p style="color: red;" id="NameError"></p>
                    <p style="color: #27ae27;" id="NameValid"> </p>
                </div>
        
                <div class="field">
                    <label>Surname </label>
                    <input type="text" name="Surname" placeholder="Surname(At least 2 characters)" id="Surname" >
                    <p style="color: red;" id="SurnameError"></p>
                    <p style="color: #27ae27;" id="SurnameValid"></p>
                </div>
                <div class="field">
                    <label>Address </label>
                    <input type="text" name="Address" placeholder="Number and street" id="Address">
                    <p style="color: red;" id="AddressError"></p>
                    <p style="color: #27ae27;" id="AddressValid"></p>
                </div>
                <div class="field">
                    <label>Email </label>
                    <input type="text" name="email_" placeholder="Exemple@domaine.com" id="Email" >
                    <p style="color: red;" id="EmailError"></p>
                    <p style="color: #27ae27;" id="EmailValid"></p>
                </div>
                <div class="field conf">
                    <label>Confirmation email </label>
                    <input type="text" name="confirmation-email" placeholder="Confirmation Email">
                    <p style="color: red;" id="CemailError"></p>
                    <p style="color: #27ae27;" id="CemailValid"></p>
                </div>
                <div class="field conf">
                    <label>Avatar </label>
                    <input type="file" name="image" id="image" value="Choose picture"/>
                </div>
                


                <div style="width:100%;"></div>
                <input id="valid" class="button" type="submit" name="action" value="EditUser">
                </form>
            </div>
        </div>
    </div>
    <!-- END EDIT PROFIL -->
    
<?php
include('Css\EditProfile.php');
include_once('js/testJsEditProfile.php');
?>