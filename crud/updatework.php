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
    if(isset($_GET['Hours'])){
    $select = mysqli_query($koneksi, "SELECT * FROM WORKS_ON WHERE Hours = '$_GET[Hours]' ");
    $baris = mysqli_fetch_array($select);
    }
    ?>   
    <form action="editwork.php" method="POST">
        
        <legend>WORKS_ON</legend>
        <p>
            <label>Essn</label>
            <input type="number" name="Essn" readonly value="<?php echo $baris['Essn']; ?>">
        </p>
        <p>
            <label>Pno</label>
            <input type="number" name="Pno" readonly value="<?php echo $baris['Pno']; ?>">
        </p>
        <p>
            <label>Hours</label>
            <input type="number" name="Hours" value="<?php echo $baris['Hours']; ?>">
        </p>
        <p>
            <input type="submit" name="submit" value="Save" />
        </p>
    </form>


  </body></left>
</html>

<?php 

mysqli_close($koneksi);
ob_end_flush();

?>