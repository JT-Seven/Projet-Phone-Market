<?php	
	 include_once("Model/Removeaccount.php");	
	 include_once("Css/Removeaccount.php");	 
 
	$membres = displayAccount();
	?>
	<h1>Remove User</h1>
	<div class="card">

<?php
	foreach($membres as $membre) {
?>

<div class="information">
<?php echo 'Name: <b style =  color:green;>'.$membre["NAME"].'' ?></b><BR>
<?php echo 'Surname: <b style =  color:green;>'.$membre["SURNAME"].'</b>' ?><BR>
<?php echo 'Email: <b style =  color:green;>'.$membre["EMAIL"].'</b>' ?>


<div class="Button">
<a href="index.php?action=RemoveUser&id=<?php echo ''.$membre["IDUSERS"].''?>&Email=<?php echo ''.$membre["EMAIL"].''?>">Remove </a>
</div>

</div>

<?php
	}
?>
	</div>
