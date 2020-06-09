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
    if(isset($_GET['Dname'])){
    $select = mysqli_query($koneksi, "SELECT * FROM department WHERE Dname= '$_GET[Dname]' ");
    $baris = mysqli_fetch_array($select);
    }
    ?>   
    <form action="editdept.php" method="POST">

        <legend>DEPARTMENT</legend>
        <p>
            <label>Dname</label>
            <input type="text" name="Dname" value="<?php echo $baris['Dname']; ?>">
        </p>
         <p>
            <label>Dnumber</label>
            <input type="number" name="Dnumber" readonly value="<?php echo $baris['Dnumber']; ?>">
        </p>
         <p>
            <label>Mgr_ssn</label>
            <input type="number" name="Mgr_ssn" value="<?php echo $baris['Mgr_ssn']; ?>">
        </p>
         <p>
            <label>Mgr_start_date</label>
            <input type="date" name="Mgr_start_date" value="<?php echo $baris['Mgr_start_date']; ?>">
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