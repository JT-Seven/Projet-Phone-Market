<?php
include_once('Model/Cart.php');
include_once('Model/EditProfile.php');
include_once('Model/Comments.php');
include_once('Css/Profile.php');

$user = getUser($_GET['id']);
$userid = $user['IDUSERS'];
$sessionUserid = $_SESSION['User'];

$comments = getAllCommentsToUser($userid);
?>

<div class="cards">
    <div class="card">
        <h1>Profile</h1>
        <div class="picture">
        <?php
        $picture = getUserPicture($userid);
        if ($picture["IMAGE"] != null) {
            echo '<img class="view-img" src="data:' . $picture['TYPE'] . ';base64,' . base64_encode($picture['IMAGE']) . '" />';
        } else {
            ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        <?php } ?>
        </div>
        <div class="name">
            <h2><?php echo $user['NAME']." ".$user['SURNAME'] ?></h2>
        </div>
        <div class="city">
            <p>France, <?php echo $user['CITY']?></p>
        </div>
        <div class="title-comments">
            <h2>Comments</h2>
        </div>
        <?php if ($userid !== $sessionUserid) { ?>
            <form method="GET" action="index.php" id="Comment">
                <div class="field textarea">
                    <textarea id="text" name="text" placeholder="Add a public comment..." cols="30" rows="1"></textarea>
                </div>
                <div class="Button">
                    <input class="button" type="submit" name="action" value="Confirm Comment" >
                </div>
                <input type="hidden" id="useridFrom" name="useridFrom" value=<?php echo $sessionUserid ?>>
                <input type="hidden" id="useridTo" name="useridTo" value=<?php echo $userid ?>>
            </form>
            <?php if (isset($_GET['Error'])) { ?>
                <p style="color: red;" id="error"><?php echo $_GET['Error'] ?></p>
            <?php
            }
        }
        ?>
        <div class="comments">
            <?php foreach ($comments as $key => $value) { ?>
            <div class="comment">
                <div class="comment-title">
                    <?php
                    $commentUser = getUser($value['USERS_IDUSER_FROM']);
                    echo "<h2>".$commentUser['NAME']." ".$commentUser['SURNAME']." ".$value['DATE']."</h2>";
                    ?>
                </div>
                <div class="comment-text">
                <?php echo "<p>".$value['TEXT']."</p>"; ?>
                </div>
                <?php if ($_SESSION['Admin'] == 1 || $commentUser['IDUSERS'] == $sessionUserid) { ?>
                <div class="Button">
                    <button class="button"><a href="index.php?action=RemoveComment&id=<?php echo $value['IDCOMMENTS']; ?>&useridTo=<?php echo $userid; ?>"><span>Remove Comment</span></a></button>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
