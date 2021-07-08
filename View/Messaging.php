<?php
include_once('Model/Messaging.php');
include_once('Css/Messaging.php');

$messags = displayMessag();
?>
<h1>Messaging</h1>

<?php
foreach ($messags as $messag) { ?>

	<div class="Messag">
		<?php echo 'Administrator:'; echo $messag["MESSAGE"] ?>
		<div class="Button">
		</div>
	</div>

<?php
}
?>