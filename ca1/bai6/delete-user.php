<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    var_dump($_GET);
    if (isset($_GET['username'])) {
        if (!empty($_GET['username'])) {
            if (isset($_SESSION['ds_users'])) {
                $ds_users = $_SESSION['ds_users'];
                var_dump("go hre", $ds_users);
                foreach ($ds_users as $key => $user) {
                    var_dump($user);
                    if ($user['username'] == $_GET['username']) {
                        unset($ds_users[$key]);
                        break;
                    }
                }
                $_SESSION['ds_users'] = $ds_users;
            }
        }
        // header("Location: users.php");
    }
}
