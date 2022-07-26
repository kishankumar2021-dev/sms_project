<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Student Management System </title>
</head>
<body>
    
    <h3 align="right" style="margin-right:20px;"><a href="login.php">Admin Login</a></h3>
    <h1 align="center">Wellcome To Student Management System</h1>
    <form action="index.php" method="post">
        <table style="width:50%;" align="center" border="1">
         <tr>
            <td colspan="2">Student Information</td>
         </tr>
         <tr>
            <td>Choose Standderd</td>
            <td>
                <select name="std">
                    <option value="1">1st</option>
                    <option value="2">2st</option>
                    <option value="3">3st</option>
                    <option value="4">4st</option>
                    <option value="5">5st</option>
                    <option value="6">6st</option>


                </select>
            </td>
         </tr>
         <tr>
            <td>Enter RollNo</td>
            <td><input type="text" name="rollno" required></td>
         </tr>
        
         <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Show Info"></td>
         </tr>
        </table>
    
    </form>
    
</body>
</html>
