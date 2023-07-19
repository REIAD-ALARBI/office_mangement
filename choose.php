<?php
 include('session.php');
include('connection.php');

$query='select Pname,price,time,days from package';
      
$stmt=mysqli_stmt_init($conn);

 mysqli_stmt_prepare($stmt,$query) or exit('Query Error.'. mysqli_stmt_errno($stmt));
 
 mysqli_stmt_execute($stmt) or exit('Query Execution failed.'. mysqli_stmt_errno($stmt));
   
 mysqli_stmt_bind_result($stmt,$Pname,$price,$time,$days) or exit('Result storage failed.'. mysqli_stmt_errno($stmt));

echo '<table border="1"><tr><th>Pname</th><th>price</th><th>time</th><th>days</th></tr>';

while(mysqli_stmt_fetch($stmt)){
		echo '<tr>';
		echo "<td>$Pname</td>";
		echo "<td>$price</td>";
		echo "<td>$time</td>";
		echo "<td>$days</td>";
		echo '<td><a href="package_assign.php?Pname='.$Pname.'">choose</a></td>';
		echo '</tr>';
 }
echo '</table><br/>';
echo mysqli_stmt_num_rows($stmt).' records found<br/>'; 

mysqli_stmt_free_result($stmt);
mysqli_stmt_close($stmt);


 mysqli_close($conn);
?>
<br/><a href="mainPage.php">Back to Menu</a>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>selected packages</title>
	<style>
        *{
            box-sizing: border-box;
			background-image:url(gympic.jpg);
			background-size: 1550px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #00549E;
            width: 500px;
            height: 40px;
            text-align: center;
			color: #fff;
        }
        table {
            border-collapse: collapse;
            margin: 6% 30%;
        }
        table th{
            background-color: rgb(157, 167, 31);
            text-transform: uppercase;
            font-weight: bold;
            font-size: 18px;
            color: #fff;
        } 
    </style>
</head>
<body>
	
</body>
</html>
