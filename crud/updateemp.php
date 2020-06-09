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
    if(isset($_GET['Fname'])){
    $select = mysqli_query($koneksi, "SELECT * FROM employee WHERE Fname= '$_GET[Fname]' ");
    $baris = mysqli_fetch_array($select);
    }
    ?>   
    <form action="editemp.php" method="POST">

        
        <legend>EMPLOYEE</legend>
        <p>
            <label>Fname</label>
            <input type="text" name="Fname" value="<?php echo $baris['Fname']; ?>"/>
        </p>
        <p>
            <label>Minit</label>
            <input type="text" name="Minit" value="<?php echo $baris['Minit']; ?>"/>
        </p>
        <p>
            <label>Lname</label>
            <input type="text" name="Lname" value="<?php echo $baris['Lname']; ?>"/>
        </p>
        <p>
            <label>Ssn</label>
            <input type="number" name="Ssn" readonly value="<?php echo $baris['Ssn']; ?>"/>
        </p>
        <p>
            <label>Bdate</label>
            <input type="date" name="Bdate" value="<?php echo $baris['Bdate']; ?>"/>
        </p>
        <p>
            <label>Address</label>
            <input type="text" name="Address" value="<?php echo $baris['Address']; ?>"/>
        </p>
        <p>
            <label>Sex</label>
            <input type="text" name="Sex" value="<?php echo $baris['Sex']; ?>"/>
        </p>
        <p>
            <label>Salary</label>
            <input type="number" name="Salary" value="<?php echo $baris['Salary']; ?>"/>
        </p>
        <p>
            <label>Super_ssn</label>
            <input type="number" name="Super_ssn" value="<?php echo $baris['Super_ssn']; ?>"/>
        </p>
        <p>
            <label>Dno</label>
            <input type="number" name="Dno" value="<?php echo $baris['Dno']; ?>"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Update" />
        </p>
        


    
</body></left>
</html>

<?php 

mysqli_close($koneksi);
ob_end_flush();

?>