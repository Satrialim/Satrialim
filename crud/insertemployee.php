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
    <title>CREATE</title>
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
		$Fname = $_POST['Fname'];
		$Minit = $_POST['Minit'];
		$Lname = $_POST['Lname'];
		$Ssn = $_POST['Ssn'];
		$Bdate = $_POST['Bdate'];
		$Address = $_POST['Address'];
		$Sex = $_POST['Sex'];
		$Salary = $_POST['Salary'];
		$Super_ssn = $_POST['Super_ssn'];
		$Dno = $_POST['Dno'];

		$insert = "INSERT INTO `employee` (`Fname`,`Minit`,`Lname`,`Ssn`,`Bdate`,`Address`,`Sex`,`Salary`,`Super_ssn`,`Dno`) VALUES ('$Fname','$Minit','$Lname','$Ssn','$Bdate','$Address','$Sex','$Salary','$Super_ssn','$Dno')";

		$run = mysqli_query($koneksi, $insert);
		if($run){
			echo "Successfully Inserted Data";
		}else{
			echo "Insert Data FAILED";
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
