
<?php
if (isset($_POST['btn']))
$userName = $_POST ['userName'];
$email = $_POST ['email'];
$password = $_POST ['password'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    

<h3>User Name: <?php echo $userName;    ?></h3>
<h3>Email: </h3>
<h3>Password:</h3>


    <form action="contact.php" method= "POST">

    <label for=""> User Name</label> <br>
    <input type="text" name= "userName"><br>
    <label for=""> Email</label><br>
    <input type="email" name = "email"><br>
    <label for=""> Password</label><br>
    <input type="Password" name= "Password"><br><br>
    <input type ="submit" name = "btn" value = "Submit Data">

    </form>



    <?php 
    
    
    ?>




</body>
</html>

