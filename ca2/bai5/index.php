<!DOCTYPE html>

<head>
    <title>bai 5</title>
    <link rel="stylesheet" href="./style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <h1>bai 5 Form </h1>
        <?php
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        /**
         *  form login => username, password => submit
         * action => index.php , method => POST
         * 
         */
        // method post da goi
        $errors = [];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['username'])) {
                if (empty($_POST['username'])) {
                    // echo "Username is required";
                    $errors['username'] = "Username is required";
                }
            }
            if (isset($_POST['password'])) {
                if (empty($_POST['password'])) {
                    $errors['password'] = "Password is required";
                }
            }
            var_dump($_POST);
        }

        ?>
        <div class="row">
            <form action="index.php" class="col-sm-6" method="post">
                <input class="form-control mb-5" type="text" name="username" placeholder="nhập tài khoản">
                <?php
                if (isset($errors['username'])) {
                    echo " <span class='text-error'>$errors[username] <br /></span>";
                }

                ?>
                <input class="form-control mb-5" type="password " name="password" placeholder="nhập mật khẩu">
                <?php

                if (isset($errors['password'])) {
                    echo " <span class='text-error'>$errors[password] <br /></span>";
                }
                ?>
                <button class="btn btn-primary">submit</button> <br />
                <?php
                foreach ($errors as $error) {
                    echo "<span class='text-error'>$error <br /></span>";
                }
                ?>
            </form>
        </div>
    </div>
</body>

</html>