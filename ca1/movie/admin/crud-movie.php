<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
// session_destroy();
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['id']) || empty($_POST['id'])) {
        $errors['id'] = "required name";
    }
    if (!isset($_POST['image']) || empty($_POST['image'])) {
        $errors['image'] = "required hinhanh";
    }
    if (!isset($_POST['title']) || empty($_POST['title'])) {
        $errors['title'] = "required title";
    }
    if (!isset($_POST['link']) || empty($_POST['link'])) {
        $errors['link'] = "required link";
    }
    if (!isset($_POST['description']) || empty($_POST['description'])) {
        $errors['description'] = "required description";
    }

    if (!isset($_POST['year']) || empty($_POST['year'])) {
        $errors['year'] = "required year";
    }

    if (count($errors) == 0) {
        if (isset($_SESSION['movies'])) {
            $blogs = $_SESSION['movies'];
            array_push($blogs, array(
                'id' => $_POST['id'],
                "title" => $_POST['title'],
                "image" => $_POST['image'],
                "description" => $_POST['description'],
                "year" => $_POST['year'],
                "link" => $_POST['link']
            ));
            echo "call here... 111";
            $_SESSION['movies'] =  $blogs;
        } else {
            $blogs = [];
            array_push($blogs, array(
                'id' => $_POST['id'],
                "title" => $_POST['title'],
                "image" => $_POST['image'],
                "description" => $_POST['description'],
                "year" => $_POST['year'],
                "link" => $_POST['link']
            ));
            echo "call here...";
            $_SESSION['movies'] =  $blogs;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Clean Blog - Start Bootstrap Theme</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Sample Post</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="page-heading">
                        <h1>Quản lý Movie</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <main class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="my-5">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" action="crud-movie.php" method="post">
                            <div class="form-floating">
                                <input class="form-control" name='id' id="id" type="number" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Mã phim</label>
                                <?php
                                if (isset($errors['id'])) {
                                    echo "<div  style='color: red'>id is required.</div>";
                                }
                                ?>

                            </div>
                            <div class="form-floating">
                                <input class="form-control" name='title' id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Tên</label>
                                <?php
                                if (isset($errors['title'])) {
                                    echo "<div  style='color: red'>name is required.</div>";
                                }
                                ?>

                            </div>
                            <div class="form-floating">
                                <input class="form-control" name='image' id="image" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">hình ảnh</label>
                                <?php
                                if (isset($errors['image'])) {
                                    echo "<div  style='color: red'>image is required.</div>";
                                }
                                ?>

                            </div>
                            <div class="form-floating">
                                <input class="form-control" name='year' id="year" type="number" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">năm sản xuất</label>
                                <?php
                                if (isset($errors['year'])) {
                                    echo "<div  style='color: red'>year is required.</div>";
                                }
                                ?>
                            </div>
                            <div class="form-floating">
                                <input class="form-control" id="link" name="link" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Link phim</label>
                                <?php
                                if (isset($errors['link'])) {
                                    echo "<div style='color: red'>link is required.</div>";
                                }
                                ?>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="description" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                <label for="message">Mô tả</label>
                                <?php
                                if (isset($errors['description'])) {
                                    echo "<div  style='color: red'>description is required.</div>";
                                }
                                ?>

                            </div>
                    </div>
                    <!-- Submit Button-->
                    <button class="btn btn-primary text-uppercase" id="submitButton" type="submit">Send</button>
                    </form>
                </div>
            </div>
            <div class="row">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        echo "<pre>";
                        var_dump($_SESSION);
                        echo "</pre>";

                        if (isset($_SESSION['movies'])) {
                            foreach ($_SESSION['movies'] as $movie) { ?>
                                <tr>
                                    <td><?php echo $movie["id"] ?></td>
                                    <td><?php echo $movie["title"] ?></td>
                                    <td><img src="<?php echo $movie["image"] ?>" width="200px" /></td>
                                    <td>
                                        <?php echo $movie["link"] ?>
                                    </td>
                                </tr>
                        <?php }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </main>
    <!-- Footer-->
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                    <i class="fas fa-circle fa-stack-2x"></i>
                                    <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2023</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>