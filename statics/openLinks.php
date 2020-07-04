<?php
$linkToOpen;
$fieldsToAdd;
$valusToAdd;
$intecator;
function openPostLink($page, $fields, $values)
{
    $linkToOpen  = $page;
    $fieldsToAdd = $fields;
    $valusToAdd = $values;
    echo '<script>prepareForm();</script>';
    for ($x = 0; $x < $fields; $x++) {
        $intecator = $x;
        echo '<script>addAttribute();</script>';
    }
    echo '<script>startForm();</script>';
}
?>
<script>
    function openLink(link, languages, attributes, values) {
        var form = document.createElement("form");
        form.setAttribute("method", "post");
        form.setAttribute("action", link);
        form.setAttribute("target", "view");

        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", "lang");
        hiddenField.setAttribute("value", languages);
        form.appendChild(hiddenField);
        if (attributes.length==0) {

        } else {
            for (var i = 0; i < attributes.length; i++) {
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", attributes[i]);
                hiddenField.setAttribute("value", values[i]);
                form.appendChild(hiddenField);
            }
        }
        document.body.appendChild(form);
        window.open('', '_self');
        form.submit();
 
    }
</script>