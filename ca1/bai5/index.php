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
        var_dump($errors);
    }

    /**
     * validate username and password ko duoc trong
     */
    ?>
    <div class="container">
        <h1>Form php</h1>
        <form method="post" action="./index.php">
            <label for="username">Username</label>
            <input class="form-control mb-3" type="text" name="username" value="<?php echo $_POST['username'] ?>" placeholder="nhap tai khoan">
            <?php
            if (isset($errors['username'])) {
                echo "<p class='error'>$errors[username]</p>";
            }

            ?>
            <label for="password">Password</label>

            <input class="form-control  mb-3" type="text" name="password" value="<?php echo $_POST['password'] ?>" placeholder="nhap mat khau">
            <?php
            if (isset($errors['password'])) {
                echo "<p class='error'>$errors[password]</p>";
            }
            ?>
            <input class="btn btn-primary " type="submit" name=submit value="login" />
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