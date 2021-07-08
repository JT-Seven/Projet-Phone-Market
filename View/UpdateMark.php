<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>

<body>
    <div class="container-mark">
    <h1>Update Mark</h1>

        <form Method='GET' action="index.php" id="UpdateMark">
            <label>New name</label>
            <input type="text" name="Mark"  id="Mark"></input><p style="color: red;" id="MarkError"></p> <p style="color: #27ae27;" id="MarkValid"></p>
            <input type="submit" name="action" value="Rename">
            <div class="alert alert-danger">
                <p>The mark must be in capitals [A-Z]<BR>
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
            <p>
                The brand must not exist<br>
                The brand must not look like an existing brand<br>
                The brand must not be a series of sibling letters
            </p>
        </div>
    </div>
</body>

</html>
<?php
include_once('Css/UpdateMark.php');
include_once('js/testJsUpdateMark.php');

