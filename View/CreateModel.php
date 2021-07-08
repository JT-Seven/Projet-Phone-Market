<?php
   include_once('Model/CreateModel.php');
   include_once('Css/CreateModel.php');
   ?>
   <div class="Container-Model">

 <form method="GET" action="index.php">
 <h1>Model</h1>
     <label>Mark</label>
     <select name="Mark" required>
         <option value=""> Choose a option </option>
         <?php
         $Marks = searchMark();
         foreach ($Marks as $Mark) {
             echo '<option value=' . $Mark['IDMARK'] . '>' . $Mark['NAME'] . '</option>';
         }
         ?>
     </select><br>
     <input type="submit" name="action" value="Next   " />
    <div>