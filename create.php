<?php
 include('session.php');
include('connection.php');

$Pname= strtoupper(filter_input(INPUT_POST,'Pname'));
$price= strtoupper(filter_input(INPUT_POST,'price'));
$time= strtoupper(filter_input(INPUT_POST,'time'));
$days= strtoupper(filter_input(INPUT_POST,'days'));


if (strlen(trim($Pname))<1) exit('package name can not be blank');

$query='insert into package(Pname,price,time,days) values(?,?,?,?)';
      
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 @mysqli_stmt_bind_param($stmt,'ssss',$Pname,$price,$time,$days) or exit('Bind Param Error.');
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   

 if (mysqli_stmt_affected_rows($stmt)>0) echo "package added.";


mysqli_stmt_close($stmt);


 mysqli_close($conn);
?>
<br/><a href="mainPage.php">Back to Menu</a>
