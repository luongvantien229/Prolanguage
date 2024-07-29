<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PRO-LANGUAGE - Online Courses For All of Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="content/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="content/css/style.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center py-4 px-xl-5">
            <div class="col-lg-3">
                <a href="index.php" class="text-decoration-none">
                    <h1 class="m-0"><span class="text-primary">PRO</span>LANGUAGE</h1>
                </a>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Our Office</h6>
                        <small>125/12 Lê Đức Thọ, F17, GV, HCM</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                        <small>hoangpvps29670@fpt.edu.vn.com</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-right">
                <div class="d-inline-flex align-items-center">
                    <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                    <div class="text-left">
                        <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                        <small>+84 814 923 673</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid" style="border-bottom: 1px #e3e3e3 solid;">
        <div class="row border-top px-xl-5">
            <div class="dropdown" style="display:flex; justify-content: center;
                        align-items: center;">
                <button type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown" style="display:flex; justify-content: center;
                        align-items: center;">
                    <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i>Subjects</h5>
                </button>
                <ul class="dropdown-menu">
                    <?php
                    $list_language = list_language();
                    foreach ($list_language as $item) {
                        extract($item);
                        ?>
                        <li><a href="index.php?page=course&id=<?= $item['id_language'] ?>" class="dropdown-item">
                                <?= $item['name_language'] ?>
                            </a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="col-lg-8">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">PRO</span>LANGUAGE</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>

                            <a href="index.php?page=course" class="nav-item nav-link">Courses</a>
                            <a href="index.php?page=teacher" class="nav-item nav-link">Teachers</a>
                            <a href="index.php?page=contact" class="nav-item nav-link">Contact</a>
                            <a href="index.php?page=about" class="nav-item nav-link">About</a>
                        </div>

                    </div>

                </nav>

            </div>
            <?php
            if (isset($_SESSION['user'])) {
                ?>
                <div class="dropdown" style="display:flex; justify-content: center;
                        align-items: center;">
                    <button type="button" class="btn  dropdown-toggle " data-bs-toggle="dropdown" style="display:flex; justify-content: center;
                        align-items: center;">
                        <img class="img_user" src="content/img/user/<?= $_SESSION['user']['image'] ?>" alt="">
                        <h5 class=" m-0">
                            <?= $_SESSION['user']['name_user'] ?>
                        </h5>
                    </button>
                    <ul class="dropdown-menu">
                        <li >
                            <a href="?page=plus_monney" class="dropdown-item ">
                                Số dư:
                                <?= vietnamdong(get_user($_SESSION['user']['user_name'])['monney']) ?>
                            </a>
                        </li>
                        <li><a href="index.php?page=infor_user&id=<?= $_SESSION['user']['id_user'] ?>"
                                class="dropdown-item">
                                Thông tin tài khoản
                            </a></li>
                        <li><a href="index.php?page=logout" class="dropdown-item">
                                Đăng Xuất
                            </a></li>
                    </ul>
                </div>
                <?php


            } else {
                ?>
                <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" style="height:40px; margin-top:14px"
                    href="index.php?page=login-form">LOGIN</a>
                <?php
            }
            ?>

        </div>

    </div>

    <!-- Navbar End -->
    <style>
        .img_user {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }
    </style>