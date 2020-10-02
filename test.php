<?php
$value = $_POST["make"];
$text = $_POST["make_text"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<select name='make' onchange="setTextField(this)">
<option value = '' selected> None </option>
<option value = '5'> Text 5 </option>
<option value = '7'> Text 7 </option>
<option value = '9'> Text 9 </option>
</select>
<input id="make_text" type = "hidden" name = "make_text" value = "" />
<script type="text/javascript">
    function setTextField(ddl) {
        document.getElementById('make_text').value = ddl.options[ddl.selectedIndex].text;
    }
</script>
</body>
</html>
