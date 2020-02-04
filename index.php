<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <h2>Wellcome</h2>
        <div class="input-group">
        <input type="text" id="username" name="username" required >
        <label for="username">Username</label>
    </div>
    
    <div class="input-group">
        <input type="password" id="password" name="password" required>
        <label for="password">Password</label>
    </div>
        <input type="submit" name="submit" value="Login" class="button">
        <p>Don't have account <a href="#">Sign up</a></p>
    </form>

    <div class="error mt-4">
    <?php  
    if(isset($_POST['submit'])){
        if(isset($_POST["username"]) && isset($_POST["password"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $username = strip_tags($username);
            $username = addslashes($username);
            $password = strip_tags($password);
            $password = addslashes($password);
		if ($username == "" || $password =="") {
            echo "<div class='alert alert-danger'>username hoặc password bạn không được để trống!</div>";
        }else{
            setcookie("user",$_POST['username'],time() + (15*86400),'/');
            echo "<div class='alert alert-primary'>Bạn đã đăng nhập thành công</div>";
        }
        }
    }
    ?>
    </div>
    
    
   


</body>
</html>