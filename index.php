<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
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
            background-color: #28a745;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .form-group input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Register</h2>
        <form method="post" autocomplete="off">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Username</label>
                <input type="text" id="email" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Register" name="register">
            </div>
            <div class="register-link">
                <p>Already have an account? <a href="login.php">login Now</a></p>
            </div>
        </form>

        <?php

        // connection 
        include("connect.php");


        // isset 
        if (isset($_POST['register'])) {

            $name = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "insert into table1(fullname,username,password) values('$fullname','$username','$password');";

            if (mysqli_query($conn, $query)) {
                header("location:success.php");


            } else {
                echo "Error";


            }
        }



        ?>

    </div>
</body>

</html>