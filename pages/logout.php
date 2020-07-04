<!DOCTYPE html>
<html>

<head>

</head>

<body><?php
        echo '<script type="text/javascript">sessionStorage.clear();</script>';
        @session_destroy();
        ?>
    <script>
        var form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", "../index.php");
        form.setAttribute("target", "view");
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "lang");
        hiddenField.setAttribute("value", "<?php $_GET['lang'] ?>");
        form.appendChild(hiddenField);
        document.body.appendChild(form);
        window.open('', '_self');
        form.submit();
    </script>
</body>

</html>