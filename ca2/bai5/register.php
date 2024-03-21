<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    $errors = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // var_dump($_POST['username']); empty
        if (isset($_POST['username'])) {
            if (empty($_POST['username'])) {
                // them item vao mang
                $errors['username'] = "username is required";
            }
        }
        if (isset($_POST['password'])) {
            if (empty($_POST['password'])) {
                $errors['password'] = "username is required";
            }
        }
        if (isset($_POST['email'])) {
            if (empty($_POST['email'])) {
                $errors['email'] = "email is required";
            } else {
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $errors['email'] = "invalid email format";
                }
            }
        }
        var_dump($errors);
    }

    /**
     * validate username and password ko duoc trong
     */
    ?>
    <div class="container">
        <h1>Đăng ký</h1>
        <form method="post" action="./register.php">
            <label for="username">Username</label>
            <input class="form-control mb-3" type="text" name="username" value="<?php echo $_POST['username'] ?>" placeholder="nhap tai khoan">
            <?php
            if (isset($errors['username'])) {
                echo "<p class='error'>$errors[username]</p>";
            }

            ?>

            <label for="username">Email</label>
            <input class="form-control mb-3" type="text" name="email" value="<?php echo $_POST['email'] ?>" placeholder="nhap email">
            <?php
            if (isset($errors['email'])) {
                echo "<p class='error'>$errors[email]</p>";
            }

            ?>

            <label for="password">Password</label>

            <input class="form-control  mb-3" type="text" name="password" value="<?php echo $_POST['password'] ?>" placeholder="nhap mat khau">
            <?php
            if (isset($errors['password'])) {
                echo "<p class='error'>$errors[password]</p>";
            }
            ?>

            <label for="password">Confirm password</label>

            <input class="form-control  mb-3" type="text" name="password" value="<?php echo $_POST['password'] ?>" placeholder="nhap lai mat khau">
            <?php
            if (isset($errors['password'])) {
                echo "<p class='error'>$errors[password]</p>";
            }
            ?>

            <select class="form-select mb-3">
                <option>chọn quyền</option>
                <option value="admin">admin</option>
                <option value="user">user</option>
            </select>

            <input class="btn btn-primary " type="submit" name=submit value="register" />
            <?php
            if (count($errors) > 0) {
                foreach ($errors as $err) {
                    echo "<p class='error'>$err</p>";
                }
            }
            ?>
        </form>
    </div>
</body>

</html>