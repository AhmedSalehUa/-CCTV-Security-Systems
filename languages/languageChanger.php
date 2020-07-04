<?php
$language = "en";
    if (isset($_POST["lang"])) {
        if ($_POST["lang"] == "en") {
           echo ' <script> document.getElementById("lang_value").value = "ar";  </script>';
           echo ' <script> document.getElementById("lang_name").innerHTML = "AR";  </script>';
           $language = "en";
        } else {
            echo ' <script> document.getElementById("lang_value").value = "en";  </script>';
            echo ' <script> document.getElementById("lang_name").innerHTML = "EN";  </script>';
            $language = "ar";
        }
    } else {
        if (isset($_GET["lang"])) {
            if ($_GET["lang"] == "en") {
               echo ' <script> document.getElementById("lang_value").value = "ar";  </script>';
               echo ' <script> document.getElementById("lang_name").innerHTML = "AR";  </script>';
               $language = "en";
            } else {
                echo ' <script> document.getElementById("lang_value").value = "en";  </script>';
                echo ' <script> document.getElementById("lang_name").innerHTML = "EN";  </script>';
                $language = "ar";
            }
        } else {
            echo ' <script> document.getElementById("lang_value").value = "ar";  </script>';
            echo ' <script> document.getElementById("lang_name").innerHTML = "AR";  </script>';
            $language = "en";
        }
    }
