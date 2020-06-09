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
 <title>READ</title>
    <link rel="stylesheet" type="text/css" href="Crud.css">
   
</head>
<center><div style="font-size: 40px"><b><i>CRUD</i></b></div>
    <br>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
 
</style>
</center>
</head>
<body>

<div class="topnav">
  <a class="active" href="create.php">Create</a>
  <a href="Read.php">Read</a>
</div>
  
     <br>

</head>

    <left>
     <form action="insertemployee.php" method="POST">
        
        <legend>EMPLOYEE</legend>
        <p>
            <label>Fname</label>
            <input type="text" name="Fname"/>
        </p>
        <p>
            <label>Minit</label>
            <input type="text" name="Minit"/>
        </p>
        <p>
            <label>Lname</label>
            <input type="text" name="Lname"/>
        </p>
        <p>
            <label>Ssn</label>
            <input type="number" name="Ssn"/>
        </p>
        <p>
            <label>Bdate</label>
            <input type="date" name="Bdate"/>
        </p>
        <p>
            <label>Address</label>
            <input type="text" name="Address"/>
        </p>
        <p>
            <label>Sex</label>
            <input type="text" name="Sex"/>
        </p>
        <p>
            <label>Salary</label>
            <input type="number" name="Salary"/>
        </p>
        <p>
            <label>Super_ssn</label>
            <input type="number" name="Super_ssn"/>
        </p>
        <p>
            <label>Dno</label>
            <input type="number" name="Dno"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Save" />
        </p>
        
    </form>

    <br>
    <br>

         <form action="" method="POST">
    <form action="insertdepartment.php" method="POST">
        
        <legend>DEPARTMENT</legend>
        <p>
            <label>Dname</label>
            <input type="text" name="Dname"/>
        </p>
         <p>
            <label>Dnumber</label>
            <input type="number" name="Dnumber"/>
        </p>
         <p>
            <label>Mgr_ssn</label>
            <input type="number" name="Mgr_ssn"/>
        </p>
         <p>
            <label>Mgr_start_date</label>
            <input type="date" name="Mgr_start_date"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Save" />
        </p>

        
    </form>


    <br>
    <br>

    <form action="insertdeploc.php" method="POST">
    
        <legend>DEPT LOCATION</legend>
        <p>
            <label>Dnumber</label>
            <input type="number" name="Dnumber"/>
        </p>
        <p>
            <label>Dlocation</label>
            <input type="text" name="Dlocation"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Save" />
        </p>

    </form>

    <br>
    <br>

    <form action="insertwork.php" method="POST">
        
        <legend>WORKS_ON</legend>
        <p>
            <label>Essn</label>
            <input type="number" name="Essn"/>
        </p>
        <p>
            <label>Pno</label>
            <input type="number" name="Pno"/>
        </p>
        <p>
            <label>Hours</label>
            <input type="number" name="Hours"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Save" />
        </p>
        
    </form>

    <br>
    <br>

    <form action="insertdependent.php" method="POST">
        
        <legend>DEPENDENT</legend>
        <p>
            <label>Essn</label>
            <input type="number" name="Essn"/>
        </p>
        <p>
            <label>Dependent_name</label>
            <input type="text" name="Dependent_name"/>
        </p>
        <p>
            <label>Sex</label>
            <input type="text" name="Sex"/>
        </p>
        <p>
            <label>Bdate</label>
            <input type="date" name="Bdate"/>
        </p>
        <p>
            <label>Relationship</label>
            <input type="text" name="Relationship"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Save" />
        </p>
        
    </form>

    <br>
    <br>

    <form action="insertproject.php" method="POST">
        
        <legend>PROJECT</legend>
        <p>
            <label>Pname</label>
            <input type="text" name="Pname"/>
        </p>
        <p>
            <label>Pnumber</label>
            <input type="number" name="Pnumber"/>
        </p>
        <p>
            <label>Plocation</label>
            <input type="text" name="Plocation"/>
        </p>
        <p>
            <label>Dnum</label>
            <input type="number" name="Dnum"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Save" />
        </p>
        
    </form>

    </left>
</body></left>
</html>

<?php 

mysqli_close($koneksi);
ob_end_flush();

?>
