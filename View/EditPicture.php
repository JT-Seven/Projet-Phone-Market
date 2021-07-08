<?php
include_once('Model/EditPicture.php');
?>
<div class="container-sell">
    <form method="POST" enctype="multipart/form-data" action="index.php?action=EditPicture">
        <h1>Picture profil</h1>
        <input type="file" name="image" id="image"/>
        <input type="submit" value="EditPicture"/>
    </form>
</div>
<?php
