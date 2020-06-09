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
</div>

    <hr>

    <?php
    	$Dname = $_POST['Dname'];
		$Dnumber = $_POST['Dnumber'];
		$Mgr_ssn = $_POST['Mgr_ssn'];
		$Mgr_start_date = $_POST['Mgr_start_date'];

		
		$update = "UPDATE `department` SET `Dname`= '$Dname', `Dnumber`='$Dnumber', `Mgr_ssn`='$Mgr_ssn', `Mgr_start_date`='$Mgr_start_date' WHERE `Dnumber`='$Dnumber' ";

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