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
    </center>
    <left>

    <?php 
    if(isset($_GET['Dlocation'])){
    $select = mysqli_query($koneksi, "SELECT * FROM dept_locations WHERE Dlocation = '$_GET[Dlocation]' ");
    $baris = mysqli_fetch_array($select);
    }
    ?>   
    <form action="editdloc.php" method="POST">

        <legend>DEPT LOCATION</legend>
        <p>
            <label>Dnumber</label>
            <input type="number" name="Dnumber" readonly value="<?php echo $baris['Dnumber']; ?>">
        </p>
         <p>
            <label>Dlocation</label>
            <input type="text" name="Dlocation" readonly value="<?php echo $baris['Dlocation']; ?>">
        </p>
        <p>
            <input type="submit" name="submit" value="Update" />
        </p>
    </form>


  </body></left>
</html>

<?php 

mysqli_close($koneksi);
ob_end_flush();

?>