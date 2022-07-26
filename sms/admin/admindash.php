<?php
session_start();

       if(isset($_SESSION['uid']))
       {
           echo "";
       }
       else
       {
           header('location: ../login.php');
       }
?>
<?php
include ('header.php');

?>
<div class="admintitle">
    <h1><a href="logout.php" style="float:right;margin-right:12px;color:white;font-size:10px;">Logout</a></h1>
    <h1>Welcome To Admin DashBoard</h1>
    

</div>
<div class="dashboard">
    <table border="1" cellspacing="5" style="width:30%;margin-left:500px ;">
        <tr>
            <td>1.<td><a href="addstudent.php">Insert Student Record</a></td></td>
        </tr>
        <tr>
            <td>2.<td><a href="update.php">Update Student Record</a></td></td>
        </tr>
        <tr>
            <td>3.<td><a href="delete.php">delete Student Record</a></td></td>
        </tr>
    </table>

</div>
    
</body>
</html>