<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('wp3015179.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-pic {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 20px auto;
            object-fit: cover;
            border: 3px solid #000000ff;
        }

        .container {
            background: #fff;
            padding: 150px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            max-width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #007bff;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <img src="img.jpg" alt="User Icon" class="profile-pic">
        <h2>Login</h2>
        <form method="post">
            <div class="form-group">
                <label for="email">Username</label>
                <input type="text" id="email" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Login" name="btnlogin">
            </div>
            <div class="register-link">
                <p>Don't have an account? <a href="index.php">Register Now</a></p>
            </div>
        </form>
    </div>
</body>

</html>





<!-- other  -->

<?php

require "connect.php";


if (isset($_POST['btnlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select * from table1 where username = '$username' or password = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {


        if ($password == $row["password"]) {

            header("location:home.php");

        } else {
            echo "error";
        }

    }
}

?>