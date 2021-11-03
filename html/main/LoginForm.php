<?php
    if (isset($_POST['username'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if ($username == 'admin' && $password == '123456') {
            session_start();
            $_SESSION['username'] = $username;

            header("location: html/main/index.php");

        } else {
            echo 'Nhap sai r tl';
        }
    } else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }
            
        body {
            background-color: #e5eaf5;
        }
        .loginForm {
            width: 500px;
            height: 300px;
            margin: 50px auto;
            padding: 40px;
            background-color: white;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .loginField {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            width: 300px;
            height: 50px;
            background-color: #f2f7ff;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        i {
            font-size: 18px;
            padding-right: 30px;
            color: #344667;
        }

        .loginField .input {
            border: 0;
            outline: none;
            background-color: transparent;
            height: 30px;
            font-size: 18px;
            color: #344667;
        }

        .forgotPassword {
            width: 300px;
        }

        a {
            display: block;
            text-align: right;
            text-decoration: none;
            color: #3b4c6b;
            font-weight: 550;
        }

        .submit {
            margin-top: 20px;
            width: 60%;
            height: 50px;
            border-radius: 30px;
            border: 0;
            background-color: #435ebe;
            font-size: 20px;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #6a86ee;
        }
    </style>
    <title>Login</title>
</head>
<body>
    <form method="POST" class="loginForm">
        <div class="loginField">
        <i class="fas fa-user"></i>
        <input type="text" name="username" placeholder="Số điện thoại hoặc mã học sinh" class="input">
        </div>

        <div class="loginField">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Mật khẩu" class="input">
        </div>

        <div class="forgotPassword">
            <a href="">Quên mật khẩu</a>
        </div>

        <button class="submit">Đăng nhập</button>
    </form>

    <?php
    }
    ?>
</body>
</html>