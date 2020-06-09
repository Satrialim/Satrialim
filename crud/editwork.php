<?php 

ob_start();
$koneksi;
$nameserver = "localhost";
$username = "root";
$password = "";
$namadb = "companysatria";

$koneksi = mysqli_connect($nameserver,$username,$password,$namadb);
if(!$koneksi) {
        die("Maaf, koneksi database gagal".mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
	<link rel="stylesheet" type="text/css" href="Crud.css">
</head>
<center><div style="font-size: 40px"><b><i>CRUD</i></b></div>
    
<body><left>
	<hr>
            <div class="topnav">
    <a href="create.php">Create</a>
  <a href="Read.php">Read</a>
</div>    <hr>

    <?php
    	$Essn = $_POST['Essn'];
		$Pno = $_POST['Pno'];
		$Hours = $_POST['Hours'];

		
		$update = "UPDATE `works_on` SET `Essn`= '$Essn', `Pno`='$Pno', `Hours`='$Hours' WHERE `Pno`='$Pno' ";

		$run = mysqli_query($koneksi, $update);
		if($run){
			echo "Data has been Updated";
		}else{
			echo"Failed to update Data";
		}

    ?>

	<br>
	<br>

		<a href="Read.php"><b>Back to Read</b></a>
    <a href="create.php"><b>Back to Create</b></a>



</body></center>
</html>

<?php 

mysqli_close($koneksi);
ob_end_flush();

?>