<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
        #outer
        {
            height:350px;
            width:300px;
            padding:10px;
            border-radius:10px;
            background:linear-gradient(120deg green,yellow,red);
            box-shadow:0px 0px 3px black inset;
            margin:100px auto;
        }
    </style>
</head>
<body>
    <div id="outer">
    <h1 align="center">Admin Login</h1>
    <form action="login.php" method="post">
        <table border="1" align="center">
            <tr>
                <td>Username</td><td><input type="text" name="uname" required></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="password" name="pass" required></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="login" value="login"> </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
include('dbcon.php');

if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password  = $_POST['pass'] ;

    $query ="SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password'";

   $run = mysqli_query($conn,$query);
   $row = mysqli_num_rows($run);
  
   if($row!=1)
   {
       ?>
        <script>
            alert('Username or Password not match !!');
            window.open('login.php','_self');
        </script>
        <?php
   }
   else
   {
        $data = mysqli_fetch_assoc($run);

        $id = $data['id'];

        echo "id = ".$id;

        

        $_SESSION['uid'] = $id;
        header('location:admin/admindash.php');
   }

}

?>