<?php
include_once('Css/Contact.php')
?>

<div class="container-contact">
  <div class="titre">
    <h2>Welcome to the Contact page</h2>
  </div>

  <!-- CODE IMPORT -->

  <div class="container-contact-us">
      <span class="big-circle"></span>
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Select the object of your request and fill in the information in the form above. We will get back to you as soon as possible.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/map.svg" class="icon" alt="" />
              <p>74 bis, avenue Maurice Thorez 94200 Ivry-sur-Seine</p> <!-- Mettre une api googleMap -->
            </div>
            <div class="information">
              <img src="img/letter.svg" class="icon" alt="" />
              <p>phonemarketintechs2@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/selphone.svg" class="icon" alt="" />
              <p>+33 (0)1 43 90 21 21</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="https://github.com/AlanLg/PhoneMarket">
                <img src="img/github.svg" class="logo" alt="" />
              </a>
              <a href="https://twitter.com/intechinfo">
                <img src="img/twitter.svg" class="logo" alt="" />
              </a>
              <a href="https://www.instagram.com/intech_paris/?hl=fr">
                <img src="img/instagram.svg" class="logo" alt="" />
              </a>
              <a href="https://www.facebook.com/intechinfo">
                <img src="img/facebook.svg" class="logo" alt="" />
              </a>
            </div>
          </div>
        </div>
        <div class="formulaire">
          <h3>Contact us</h3>
          <?php if(isset($error)) { echo "<p class='error'>$error</p>"; } ?>
          <p class='error fields' style="color: red;" id="GenralError"></p>
          <div class="form">
              <form method="GET" action="index.php" id="Contact">
                <div class="field">
                  <label for="fname">Email</label>
                  <input type="email" id="Email" name="Email" placeholder="Your Email" value="<?php if (isset($_GET['Email'])) { echo '' . $_GET['Email'] . '';} ?>">
                  <p style="color: red;" id="EmailError"></p><p style="color: #27ae27;" id="EmailValid"></p>
                </div>
                <div class="field">
                  <label for="object">Object</label>
                  <select id="object" name="object">
                    <option value=""> Choose a option</option>
                    <option value="Bug">Bug</option>
                    <option value="Account">Account</option>
                    <option value="Brand">Brand</option>
                    <option value="Model">Model </option>
                  </select>
                </div>
                <div class="field textarea">
                  <label for="subject">Subject</label>
                  <textarea id="subject" name="subject" placeholder="Write something.." cols="30" rows="5"></textarea>
                </div>
                <div class="condition">
                  <h4>Condition :</h4>
                  <p>Mail sending limit is three<br>
                  if the shipment is greater than three, we will block your shipment<br>
                  be careful if the email has no meaning the administrator can delete your account</p>
                </div>
                <input class="button" type="submit" name="action" value="Contact" >
              </form>
          </div>
        </div>
      </div>
  </div>

  <!-- END CODE IMPORT -->

  
</div>

<?php include_once('js/testJsContact.php'); ?>
<?php include_once('js/contact-us.php'); ?>

