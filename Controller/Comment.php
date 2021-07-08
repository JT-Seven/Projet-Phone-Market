<?php
include_once("Model/Comments.php");

if ($_GET["action"] == "RemoveComment")
    removeComment($_GET["id"]);

if ($_GET["action"] == "Confirm Comment") {
    $text = trim($_GET['text']);
    $text = preg_replace('/\s+/', ' ', $text);

    $badWords = array(
        'shit' => '***',
        'fuck' => '***');

    $text = strtr($text, $badWords);

    if (strlen($text) < 10) {
        $error = "your comment can't be shorter than 10 characters";
        header('Location: index.php?action=Profile&id='.$_GET['useridTo'].'&Error='.$error);
        return;
    }

    if (strlen($text) > 300) {
        $error = "your comment can't be longer than 300 characters";
        header('Location: index.php?action=Profile&id='.$_GET['useridTo'].'&Error='.$error);
        return;
    }

    if (getCommentAmount($_GET['useridFrom'], $_GET['useridTo']) >= 5) {
        $error = "you can't post more than 5 comments on one profile";
        header('Location: index.php?action=Profile&id='.$_GET['useridTo'].'&Error='.$error);
        return;
    }

    createNewComment($_GET['useridFrom'], $_GET['useridTo'], $text);
}

header('Location: index.php?action=Profile&id='.$_GET['useridTo']);
