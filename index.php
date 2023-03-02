
<?php
if (isset($_POST['btn'])){
    
$userName = $_POST ['username'];
$email = $_POST ['email'];
$password = $_POST ['password'];

}

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

<h3>User Name: <?php if(isset($userName)) { 
    echo $userName;
    }   ?></h3>
<h3>Email: <?php if (isset($email)){
    echo $email;
} ?> </h3>
<h3>Password: <?php if (isset($password)){
    echo $password;
} ?></h3>


    <form action="" method= "POST">

    <label for=""> User Name</label> <br>
    <input type="text" name= "username"><br>
    <label for=""> Email</label><br>
    <input type="email" name = "email"><br>
    <label for=""> Password</label><br>
    <input type="password" name= "password"><br><br>
    <input type ="submit" name = "btn" value = "Submit Data">

    </form>



    <?php 
    
    
    ?>




</body>
</html>

