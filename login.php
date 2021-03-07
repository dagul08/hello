<!DOCTYPE html>
<html>
    <head> 
        <title>LOGIN FORM</title>
    </head>
    <body>
        <form method="POST" action="login.php">
            USERNAME:<input type="text" placeholder="Enter username" name="username" class="text"><br>
            PASSWORD:<input type="password" placeholder="Enter password" name="password" class="text"><br>
            <Button type="submit" name="submit">submit</Button>
        </form>
    </body>
    <?php
    
    
    if (isset($_POST['submit'])){
	$user = $_POST['username'];
    $pass = $_POST['password'];
        
        
        if($user == 'ADMIN' && $pass == 'ADMIN123'){
            header("location:home.html");
            exit();
        }
        elseif($user == '' && $pass == ''){
            echo ("please fill out the following");
        }
        else
            echo ("Invalid Username/Password");
    }
?>
</html>