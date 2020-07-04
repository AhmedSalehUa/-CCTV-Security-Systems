<?php

$language = "en";
if (isset($_POST["lang"])) {
    if ($_POST["lang"] == "en") {
        include '../languages/english.php';
        $language = "en";
    } else {
        include '../languages/arabic.php';
        $language = "ar";
    }
} else {
    if (isset($_GET["lang"])) {
        if ($_GET["lang"] == "en") {
            include '../languages/english.php';
            $language = "en";
        } else {
            include '../languages/arabic.php';
            $language = "ar";
        }
    } else {
        include '../languages/arabic.php';
        $language = "ar";
    } 
}  