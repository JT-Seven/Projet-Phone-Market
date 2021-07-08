<body>
<div class="Container-login">
<form action="" method="POST">
    <h1>Login</h1>
    <label><b>Email</b></label>
    <input type="text" name="Email" placeholder="Email"value="<?php if (isset($_POST['Email'])) { echo '' . $_POST['Email'] . ''; } ?>"><br>
    <label><b>Password</b>
    <input type="password" name="Password" placeholder="Password" required><br>
    <div class="password-icon">
    <i data-feather="eye"></i>
    <i data-feather="eye-off"></i>
  </div>
    </label>

    <!-- ICON SCRIPT -->
<script src="https://unpkg.com/feather-icons"></script>
<script>
  feather.replace();
</script>
    <input type="submit" name="action" value="Login">
    Not a member? <a href="index.php?action=Sign up">Sign up now</a><br>
    <a href="index.php?action=Update password" class="link">Forgot your password ?</a><br>
    <?php
if(isset($error)){
echo $error;
}
?>
</form>

</div>

</body>
<?php
include('Css/Login.php');
include('js/IconeEye.php');
