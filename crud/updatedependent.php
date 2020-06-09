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
    if(isset($_GET['Dependent_name'])){
    $select = mysqli_query($koneksi, "SELECT * FROM dependent WHERE Dependent_name= '$_GET[Dependent_name]' ");
    $baris = mysqli_fetch_array($select);
    }
    ?>   
    <form action="editdependent.php" method="POST">

        <legend>DEPENDENT</legend>
        <p>
            <label>Essn</label>
            <input type="number" name="Essn" readonly value="<?php echo $baris['Essn']; ?>">
        </p>
        <p>
            <label>Dependent_name</label>
            <input type="text" name="Dependent_name" readonly value="<?php echo $baris['Dependent_name']; ?>">
        </p>
        <p>
            <label>Sex</label>
            <input type="text" name="Sex" value="<?php echo $baris['Sex']; ?>">
        </p>
        <p>
            <label>Bdate</label>
            <input type="date" name="Bdate" value="<?php echo $baris['Bdate']; ?>">
        </p>
        <p>
            <label>Relationship</label>
            <input type="text" name="Relationship" value="<?php echo $baris['Relationship']; ?>">
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