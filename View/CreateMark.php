<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container-create-mark">
        <form method="GET" action="index.php" id="CreateMark">
            <h1> Mark </h1>
            <label>Name Mark</label>
            <input  type="text" name="Add" placeholder="Enter mark"  id="Mark" ></input></br><p style="color: red;" id="MarkError"></p> <p style="color: #27ae27;" id="MarkValid"></p>
            <input type="submit" name="action" value="Add Mark" />

            <div class="alert alert-danger">
                <p>The mark must be in capitals [A-Z]<BR>
                 The mark must contain at least two characters<br>
                    The mark must no contain a number </p>
                <?php
                if (isset($error)) {
                    echo "<p1 id=error>$error</p1>";
                }
                ?>
                <p style="color: red;" id="GenralError"></p>


        </form>



        <div class="condition">
            <label>Condition :
            </label>
            <p>The brand must not exist<br>
                The brand must not look like an existing brand<br>
                The brand must not be a series of sibling letters</p>
        </div>
    </div>
    </div>


</body>

</html>



<?php
include('Css/CreateMark.php');
include_once('js/testJsCreateMark.php');
