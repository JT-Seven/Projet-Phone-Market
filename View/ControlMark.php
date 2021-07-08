<?php	
	include_once("Model/ControlMark.php");
	include_once("Css/ControleMark.php");


	//  include_once("Css/ControleMarkCreated.php");
	$marks = displayMark();
?>
<h1>Remove Brand</h1>
<div class="cards">

<?php
	foreach($marks as $mark) {
?>
            <div class="card">
			<div class="information">

 <div>
        <?php  echo 'Mark : <b style =  color:green;>'.$mark["NAME"].'</b>'?>      
    </div>
	<div class="Button1">
	<a href="index.php?action=RemoveMark&id=<?php echo ''.$mark["IDMARK"].''?>">Remove </a>
    </div>
    <div class="Button2">
	<td><a href="index.php?action=UpdateMark&id=<?php echo ''.$mark["IDMARK"].''?>">Update </a></td> 
    </div>

	</div>
		</div>

<?php
	}
	