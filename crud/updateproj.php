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
    if(isset($_GET['Pname'])){
    $select = mysqli_query($koneksi, "SELECT * FROM project WHERE Pname= '$_GET[Pname]' ");
    $baris = mysqli_fetch_array($select);
    }
    ?>   
    <form action="editproj.php" method="POST">
        
        <legend>PROJECT</legend>
        <p>
            <label>Pname</label>
            <input type="text" name="Pname" value="<?php echo $baris['Pname']; ?>"/>
        </p>
        <p>
            <label>Pnumber</label>
            <input type="number" name="Pnumber" readonly value="<?php echo $baris['Pnumber']; ?>"/>
        </p>
        <p>
            <label>Plocation</label>
            <input type="text" name="Plocation" value="<?php echo $baris['Plocation']; ?>"/>
        </p>
        <p>
            <label>Dnum</label>
            <input type="number" name="Dnum" value="<?php echo $baris['Dnum']; ?>"/>
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