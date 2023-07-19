<?php
include('session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>create package</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
</head>

<body>
    <div id="box">
        <form name="frm" method="post" action="create.php">
            <input id="text" type="text" name="Pname" maxlength="20" size="auto" placeholder="package name"
                required=""><br />
            <input id="text" type="text" name="price" maxlength="20" size="auto" placeholder="price"><br />
            <input id="text" type="text" name="time" maxlength="10" size="auto" placeholder="time"><br />
            <input id="text" type="text" name="days" maxlength="10" size="auto" placeholder="days"><br />
            <input id="button" type="submit" value="Save">
        </form>
        <br /><a href="mainPage.php">Back to Menu</a>
    </div>
</body>

</html>