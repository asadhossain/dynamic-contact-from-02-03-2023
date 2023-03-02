
<?php
if (isset($_POST['btn'])){
    
$userName = $_POST ['username'];
$email = $_POST ['email'];
$password = $_POST ['password'];

}

?>


<h3>User Name: <?php if(isset($userName)) { 
    echo $userName;
    }   ?></h3>
<h3>Email: <?php if (isset($email)){
    echo $email;
} ?> </h3>
<h3>Password: <?php if (isset($password)){
    echo $password;
} ?></h3>