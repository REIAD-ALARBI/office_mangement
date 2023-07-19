<?php
include("session.php");
include("connection.php");

$Pname= filter_input(INPUT_GET,'Pname');
$user_select = $_SESSION['login_user'];

$query='update users set package_name=? where userName=?';
      
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 @mysqli_stmt_bind_param($stmt,'ss',$Pname,$user_select) or exit('Bind Param Error.'); 
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   

 if (mysqli_stmt_affected_rows($stmt)>0) echo "package chose successfully.";

mysqli_stmt_close($stmt);


 mysqli_close($conn);
?>
<br/><a href="mainPage.php">Back to Menu</a>