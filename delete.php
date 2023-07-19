<?php
 include('session.php');
include("connection.php");
$Pname= filter_input(INPUT_GET,'Pname');

//if (strlen(trim($Pname))<1) exit('package name can not be blank'); // could be removed.

$query='delete from package where Pname=?';
      
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 @mysqli_stmt_bind_param($stmt,'s',$Pname) or exit('Bind Param Error.'); 
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   

 if (mysqli_stmt_affected_rows($stmt)>0) echo "package deleted.";

mysqli_stmt_close($stmt);


 mysqli_close($conn);
?>
<br/><a href="mainPage.php">main page</a>