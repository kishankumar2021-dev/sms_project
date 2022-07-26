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
include ('titlehead.php');
?>
<form action="#" method="post" enctype="multipart/form-data"> 
    <table border="1" width="50%" style="margin-left:30%;text-align:center;background-color:yellow;">
        <tr>
            <td>Roll No.</td>
            <td><input type="text"placeholder="roll no." name="rollno"></td>
        </tr>
        <tr>
            <td>Full Name.</td>
            <td><input type="text"placeholder="Name." name="name"></td>
        </tr>
        <tr>
            <td>City.</td>
            <td><input type="text"placeholder="City name." name="city"></td>
        </tr>
        <tr>
            <td>Parent Contact No.</td>
            <td><input type="text"placeholder="Parent Numaber." name="pcont"></td>
        </tr>
        <tr>
            <td>Standred.</td>
            <td><input type="text"placeholder="standers." name="standers"></td>
        </tr>
        <tr>
            <td>Images.</td>
            <td><input type="file" name="simg"></td>
        </tr>
        <tr>
           
            <td colspan="2"><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>
</body>
</html>

<?php

if(isset($_POST['submit'])){


    include ('../dbcon.php');

    $rollno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcont = $_POST['pcont'];
    $standers = $_POST['standers'];
    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];

    move_uploaded_file($tempname,"../dataimg/$imagename");
    
    $sql = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standers`,`image`) VALUES
     ('$rollno','$name','$city','$pcont','$standers','$imagename')";

    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<script>alert('**Data Inserted**');</script>";
    }
    else{
        echo "<script>alert('**Insertion failed**');</script>";

    }
}


?>