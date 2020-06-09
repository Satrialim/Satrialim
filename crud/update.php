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
	<title></title>
</head>
<body>
	
<?php
$insert = "INSERT INTO `department` (`Dname`, `Dnumber`, `Mgr_ssn`, `Mgr_start_date`) VALUES ('Normal', '2', '123456789', '1970-02-02')";
$run = mysqli_query($koneksi, $insert);
if($run){
			echo "Data Successfully Inserted";
		}else{
			echo "Data Insert FAILED";
		}
?>
</body>
</html>
<?php 

mysqli_close($koneksi);
ob_end_flush();

?>