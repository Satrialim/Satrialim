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
</center>
</head>
<body>

<div class="topnav">
  <a href="create.php">Create</a>
  <a class="active" href="Read.php">Read</a>
</div>

           <br>
  
                <left><table border="1" cellspacing="0">
          <b><left>EMPLOYEE</left></b>
            <tr style="font-weight: bold;">
              <td><center>NO</center></td>
                <td><center>Fname</center></td>
                <td><center>Minit</center></td>
                <td><center>Lname</center></td>
                <td><center>Ssn</center></td>
                <td><center>Bdate</center></td>
                <td><center>Address</center></td>
                <td><center>Sex</center></td>
                <td><center>Salary</center></td>
                <td><center>Super_ssn</center></td>
                <td><center>Dno</center></td>
                <td><center>Option</center></td>
            </tr>
            <?php 
            $NO = 1;

      $select = mysqli_query($koneksi, "SELECT * FROM employee");
            while($baris = mysqli_fetch_array($select)){
            ?>

            <tr>
                <td><center><?php echo $NO++ ?></center></td>
                <td><center><?php echo $baris['Fname'] ?></center></td>
                <td><center><?php echo $baris['Minit'] ?></center></td>
                <td><center><?php echo $baris['Lname'] ?></center></td>
                <td><center><?php echo $baris['Ssn'] ?></center></td>
                <td><center><?php echo $baris['Bdate'] ?></center></td>
                <td><center><?php echo $baris['Address'] ?></center></td>
                <td><center><?php echo $baris['Sex'] ?></center></td>
                <td><center><?php echo $baris['Salary'] ?></center></td>
                <td><center><?php echo $baris['Super_ssn'] ?></center></td>
                <td><center><?php echo $baris['Dno'] ?></center></td>
                <td>
                  <a href="updateemp.php?Fname=<?php echo $baris['Fname']; ?>">EDIT</a> |
                    <a href="deleteemp.php?Fname=<?php echo $baris['Fname']; ?>">DELETE</a>
              </td>
            </tr>

            <?php }
            
            ?>
        </table></left>

        <br>
        <br>

         <left><table border="1" cellspacing="0">
          <b><left>DEPARTMENT</left></b>
            <tr style="font-weight: bold;">
              <td><center>NO</center></td>
                <td><center>Dname</center></td>
                <td><center>Dnumber</center></td>
                <td><center>Mgr_ssn</center></td>
                <td><center>Mgr_start_date</center></td>
                <td><center>Option</center></td>
            </tr>
            <?php 
            $NO = 1;

      $select = mysqli_query($koneksi, "SELECT * FROM department");
            while($baris = mysqli_fetch_array($select)){
            ?>

            <tr>
                <td><center><?php echo $NO++ ?></center></td>
                <td><center><?php echo $baris['Dname'] ?></center></td>
                <td><center><?php echo $baris['Dnumber'] ?></center></td>
                <td><center><?php echo $baris['Mgr_ssn'] ?></center></td>
                <td><center><?php echo $baris['Mgr_start_date'] ?></center></td>
                <td>
                  <a href="updatedept.php?Dname=<?php echo $baris['Dname']; ?>">EDIT</a> |
                  <a href="deletedept.php?Dname=<?php echo $baris['Dname']; ?>">DELETE</a>
              </td>
            </tr>

            <?php }
            
            ?>
        </table></left>

        <br>
        <br>

        <left><table border="1" cellspacing="0">
            <b><left>DEPT LOCATION</left></b>
            <tr style="font-weight: bold;">
                <td><center>NO</center></td>
                <td><center>Dnumber</center></td>
                <td><center>Dlocation</center></td>
                <td><center>Option</center></td>
            </tr>
            <?php 
            $NO = 1;

            $select = mysqli_query($koneksi, "SELECT * FROM dept_locations");
            while($baris = mysqli_fetch_array($select)){
            ?>

            <tr>
                <td><center><?php echo $NO++ ?></center></td>
                <td><center><?php echo $baris['Dnumber'] ?></center></td>
                <td><center><?php echo $baris['Dlocation'] ?></center></td>
                <td>
                    <a href="updatedloc.php?Dlocation=<?php echo $baris['Dlocation']; ?>">EDIT</a> |
                    <a href="deletedloc.php?Dlocation=<?php echo $baris['Dlocation']; ?>">DELETE</a>
                </td>
            </tr>

            <?php }
            
            ?>
        </table></left>

        <br>
        <br>

                <left><table border="1" cellspacing="0">
          <b><left>PROJECT</left></b>
            <tr style="font-weight: bold;">
              <td><center>NO</center></td>
              <td><center>Pname</center></td>
                <td><center>Pnumber</center></td>
                <td><center>Plocation</center></td>
                <td><center>Dnum</center></td>
                <td><center>Option</center></td>
            </tr>
            <?php 
            $NO = 1;

      $select = mysqli_query($koneksi, "SELECT * FROM project");
            while($baris = mysqli_fetch_array($select)){
            ?>

            <tr>
                <td><center><?php echo $NO++ ?></center></td>
                <td><center><?php echo $baris['Pname'] ?></center></td>
                <td><center><?php echo $baris['Pnumber'] ?></center></td>
                <td><center><?php echo $baris['Plocation'] ?></center></td>
                <td><center><?php echo $baris['Dnum'] ?></center></td>
                <td>
                  <a href="updateproj.php?Pname=<?php echo $baris['Pname']; ?>">EDIT</a> |
                    <a href="deleteproj.php?Pname=<?php echo $baris['Pname']; ?>">DELETE</a>
              </td>
            </tr>

            <?php }
            
            ?>
        </table></left>

        <br>
        <br>

                <left><table border="1" cellspacing="0">
          <b><left>DEPENDENT</left></b>
            <tr style="font-weight: bold;">
              <td><center>NO</center></td>
              <td><center>Essn</center></td>
                <td><center>Dependent_name</center></td>
                <td><center>Sex</center></td>
                <td><center>Bdate</center></td>
                <td><center>Relationship</center></td>
                <td><center>Option</center></td>
            </tr>
            <?php 
            $NO = 1;

      $select = mysqli_query($koneksi, "SELECT * FROM dependent");
            while($baris = mysqli_fetch_array($select)){
            ?>

            <tr>
                <td><center><?php echo $NO++ ?></center></td>
                <td><center><?php echo $baris['Essn'] ?></center></td>
                <td><center><?php echo $baris['Dependent_name'] ?></center></td>
                <td><center><?php echo $baris['Sex'] ?></center></td>
                <td><center><?php echo $baris['Bdate'] ?></center></td>
                <td><center><?php echo $baris['Relationship'] ?></center></td>
                <td>
                  <a href="updatedependent.php?Dependent_name=<?php echo $baris['Dependent_name']; ?>">EDIT</a> |
                    <a href="deletedependent.php?Dependent_name=<?php echo $baris['Dependent_name']; ?>">DELETE</a>
              </td>
            </tr>

            <?php }
            
            ?>
        </table></left>

        <br>
        <br>

                <left><table border="1" cellspacing="0">
          <b><left>WORKS_ON</left></b>
            <tr style="font-weight: bold;">
              <td><center>NO</center></td>
              <td><center>Essn</center></td>
                <td><center>Pno</center></td>
                <td><center>Hours</center></td>
                <td><center>Option</center></td>
            </tr>
            <?php 
            $NO = 1;

      $select = mysqli_query($koneksi, "SELECT * FROM works_on");
            while($baris = mysqli_fetch_array($select)){
            ?>

            <tr>
                <td><center><?php echo $NO++ ?></center></td>
                <td><center><?php echo $baris['Essn'] ?></center></td>
                <td><center><?php echo $baris['Pno'] ?></center></td>
                <td><center><?php echo $baris['Hours'] ?></center></td>
                <td>
                    <a href="updatework.php?Hours=<?php echo $baris['Hours']; ?>">EDIT</a> |
                    <a href="deletework.php?Hours=<?php echo $baris['Hours']; ?>">DELETE</a>
              </td>
            </tr>

            <?php }
            
            ?>
        </table></left>

</body></left>
</html>


<?php 

mysqli_close($koneksi);
ob_end_flush();

?>
