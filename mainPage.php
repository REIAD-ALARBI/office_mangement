<?php
 include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>welcome</title>
</head>

<header>
<h1  style="background-color:powderblue;;" >Welcome <?php echo $_SESSION['login_user'] ?></h1>
    <nav>
        <ul>
            <li><a href="mainPage.php">Home</a> </li>
            <li><a href="logout.php">logout</a> </li>
            <li><a href="create_form.php">create</a> </li>
            <li><a href="list.php">list_delete</a> </li>
            <li><a href="choose.php">choose a package</a> </li>
            <li><a href="selected_packages.php">selected packages</a> </li>



        </ul>
    </nav>
</header>

<body>

</body>

</html>