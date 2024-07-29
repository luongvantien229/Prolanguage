<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN CONTROL</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="content/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">

                        </span>
                        <span class="title">PRO-LANGUAGE</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?ctrl=main">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?ctrl=user">
                        <span class="icon">
                            <ion-icon name="person-outline"></ion-icon>
                        </span>
                        <span class="title">User</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?ctrl=course">
                        <span class="icon">
                            <ion-icon name="book-outline"></ion-icon>
                        </span>
                        <span class="title">Course</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?ctrl=teacher">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Teacher</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?ctrl=language">
                        <span class="icon">
                            <ion-icon name="language-outline"></ion-icon>
                        </span>
                        <span class="title">Language</span>
                    </a>
                </li>

                <li>
                    <a href="index.php?ctrl=comment">
                        <span class="icon">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </span>
                        <span class="title">Comment</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?ctrl=event">
                        <span class="icon">
                            <ion-icon name="list-outline"></ion-icon>
                        </span>
                        <span class="title">Event</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?ctrl=logout">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
            </div>
            <!-- ======================= Cards ================== -->

            <div class="cardBox">
                <a href="index.php?ctrl=user" style="text-decoration: none;">
                    <div class="card">
                        <div>
                            <div class="numbers">
                                <?= $count_user['user'] ?>
                            </div>
                            <div class="cardName">User</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="person-outline"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="index.php?ctrl=course" style="text-decoration: none;">
                    <div class="card">
                        <div>
                            <div class="numbers">
                                <?= $count_course['course'] ?>
                            </div>
                            <div class="cardName">Course</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="book-outline"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="index.php?ctrl=comment" style="text-decoration: none;">
                    <div class="card">
                        <div>
                            <div class="numbers">
                                <?= $count_cmt['cmt'] ?>
                            </div>
                            <div class="cardName">Comments</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="chatbubbles-outline"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="index.php?ctrl=teacher" style="text-decoration: none;">
                    <div class="card">
                        <div>
                            <div class="numbers">
                                <?= $count_teacher['teacher'] ?>
                            </div>
                            <div class="cardName">Teacher</div>
                        </div>
                        <div class="iconBx">
                            <ion-icon name="people-outline"></ion-icon>
                        </div>
                    </div>
                </a>
            </div>