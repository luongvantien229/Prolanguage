<?php
ob_start();
include "global.php";
include "dao/pdo.php";
include "dao/admin.php";
include "dao/main.php";
include "dao/user.php";
include "dao/course.php";
include "dao/teacher.php";
include "dao/language.php";
include "dao/cmt.php";
include "dao/event.php";
include "dao/follow.php";
include "dao/chapter.php";


$specialCharacterRegex = '/[<>]/';


include "view/main/header.php";
unset($_SESSION['accept']);
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        //<======================= LOGIN FORM ==========================>
        case 'login-form':
            include "view/main/login.php";
            if (isset($_POST['submit'])) {
                $user_name = $_POST['user_name'];
                $pass = $_POST['pass'];
                if (login($user_name, $pass) and check_active($user_name, $pass)) {
                    $_SESSION['user'] = get_user($user_name);
                    header("Location:index.php");
                } else if (login($user_name, $pass) and check_active($user_name, $pass) == false) {
                    ?>
                        <script>
                            alert("Tài Khoản Đã Bị Khóa Vui Lòng Liên Hệ Admin Để Biết Thêm Chi Tiết !!!!");
                        </script>
                    <?php
                } else if (login($user_name, $pass) == false) {
                    ?>
                            <script>
                                alert("Tài Khoản Hoặc Mật Khẩu Sai !!!!");
                            </script>
                    <?php
                }

            }
            if (isset($_POST['add'])) {
                $user_name = $_POST['user_name'];
                $pass = $_POST['pass'];
                $repass = $_POST['repass'];

                if (check_user_name($user_name)) {
                    header('Refresh:0.5 URL=index.php?page=login-form');
                    ?>
                    <script>
                        alert('Tên Đăng Nhập Đã Tồn Tại !!!');
                        setTimeout(function () {
                            window.location.href = 'index.php?page=login-form';
                        }, 500);
                    </script>
                    <?php
                } else {
                    if (preg_match($specialCharacterRegex, $user_name) || preg_match($specialCharacterRegex, $pass)) {
                        ?>
                        <script>
                            alert("Tài khoản hoặc mật khẩu chứa các kí tự không được cho phép !!!");
                        </script>
                        <?php
                    } else {
                        if ($pass === $repass) {
                            add_user($user_name, $pass);
                            header('Refresh:0.5 URL=index.php?page=login-form');
                            ?>
                            <script>
                                alert('Đăng Ký Thành Công Vui Lòng Đăng Nhập !!!');
                                setTimeout(function () {
                                    window.location.href = 'index.php?page=login-form';
                                }, 500);
                            </script>
                            <?php

                        } else {
                            ?>
                            <script>
                                alert("Mật khẩu không khớp !!!");
                            </script>
                            <?php
                        }

                    }
                }
            }
            break;
        case 'logout':
            unset($_SESSION['user']);
            header('Location:index.php');
            break;
        //<==========================FORGOT PASSWORD===========================>
        case 'forgot':
            include "view/main/forgot.php";
            if (isset($_POST['change'])) {
                $user = get_user_by_email($_POST['email']);
                $random = rand(100000, 999999);
                change_pass($random, $user['id_user']);
                include "PHPMailer/index.php";
                header('Refresh:0.1 URL=index.php?page=login-form');
                ?>
                <script>
                    alert('Đổi Mật Khẩu Thành Công Vui Lòng Đăng Nhập Lại !!!');
                    setTimeout(function () {
                        window.location.href = 'index.php?page=login-form';
                    }, 100);
                </script>
                <?php
            }
            break;
        //<===========================INFOMATION OF USER============================>
        case 'infor_user':
            $user = get_user_by_id($_GET['id']);
            include "view/user/infor-user.php";
            break;
        case 'update_user':
            if (isset($_POST['change']) && $_POST['change']) {
                change_user($_POST['name_user'], $_POST['email'], save_file('image', 'content/img/user/'), $_POST['id_user']);

                header('Location: index.php?page=infor_user&id=' . $_SESSION['user']['id_user']);
            }
            break;
        case 'change_pass':
            include "view/user/change_pass.php";
            if (isset($_POST['change'])) {
                if (login($_SESSION['user']['user_name'], $_POST['password'])) {
                    if (preg_match($specialCharacterRegex, $_POST['new-password']) == false) {
                        if ($_POST['password'] != $_POST['new-password']) {
                            if ($_POST['new-password'] === $_POST['confirm-password']) {
                                change_pass($_POST['new-password'], $_SESSION['user']['id_user']);
                                header('Refresh:0.5 URL=index.php?page=login-form');
                                unset($_SESSION['user']);
                                ?>
                                <script>
                                    alert('Đổi Mật Khẩu Thành Công Vui Lòng Đăng Nhập Lại !!!');
                                    setTimeout(function () {
                                        window.location.href = 'index.php?page=login-form';
                                    }, 500);
                                </script>
                                <?php
                            } else {
                                ?>
                                <script>
                                    alert('Mật Khẩu Xác Nhận Sai');
                                </script>
                                <?php
                            }
                        } else {
                            ?>
                            <script>
                                alert('Mật Khẩu Mới Phải Khác Mật Khẩu Cũ');
                            </script>
                            <?php
                        }

                    } else {
                        ?>
                        <script>
                            alert('Mật Khẩu Không Được Chứa Kí Tự Đặc Biệt');
                        </script>
                        <?php

                    }

                } else {
                    ?>
                    <script>
                        alert('Mật Khẩu Không Đúng');
                    </script>
                    <?php
                }
            }
            break;
        // <=========================COURSES=============================>
        case 'course':
            if (isset($_GET['id'])) {
                if (check_list_course_by_id($_GET['id'])) {
                    $list_course = list_course_by_id($_GET['id']);
                    $title = name_course($_GET['id']);
                } else {
                    $list_course = list_course_by_id($_GET['id']);
                    $title = "Chúng Tôi Chưa Cập Nhật Các Khóa Học Thuộc Loại Ngôn Ngữ Bạn Đã Chọn";
                }

            } else {
                $list_course = list_course();
                $title = "ALL OUR COURSES";
            }
            include "view/course/course.php";
            break;
        case 'infor_course':
            $course = view_course($_GET['id']);
            $cmt = cmt_by_course($_GET['id']);
            $chapter = chap_by_course($_GET['id']);
            include "view/course/course_infor.php";
            break;
        case 'fl_course':
            if ($_SESSION['user']['monney'] >= view_course($_GET['id'])['price']) {
                follow($_SESSION['user']['id_user'], $_GET['id']);
                buy_course($_SESSION['user']['id_user'], view_course($_GET['id'])['price']);
                up_date_member($_GET['id']);
                header('Refresh:0.5 URL=index.php?page=infor_course&id=' . $_GET['id']);
                ?>
                <script>
                    alert('Mua khóa học thành công !!!');
                    setTimeout(function () {
                        window.location.href = 'index.php?page=infor_course&id=<?= $_GET['id'] ?>';
                    }, 500);
                </script>
                <?php
            } else {
                header('Refresh:0.5 URL=index.php?page=infor_course&id=' . $_GET['id']);
                ?>
                <script>
                    alert('Số Dư Không Đủ Vui Lòng Nạp Thêm !!!');
                    setTimeout(function () {
                        window.location.href = 'index.php?page=infor_course&id=<?= $_GET['id'] ?>';
                    }, 500);
                </script>
                <?php
            }
            break;
        case 'cmt_course':
            if (check_fl($_SESSION['user']['id_user'], $_GET['id']) && count_cmt_by_user($_SESSION['user']['id_user'], $_GET['id'])['cmt'] <= 3) {
                if (isset($_POST['add']) && $_POST['add']) {
                    if (preg_match($specialCharacterRegex, $_POST['content'])) {
                        header('location: index.php?page=infor_course&id=' . $_GET['id']);
                    } else {
                        add_cmt($_SESSION['user']['id_user'], $_GET['id'], $_POST['content']);
                        header('location: index.php?page=infor_course&id=' . $_GET['id']);
                    }
                }
            } else if (check_fl($_SESSION['user']['id_user'], $_GET['id']) === false) {
                header('Refresh:0.5 URL=index.php?page=infor_course&id=' . $_GET['id']);
                ?>
                    <script>
                        alert('Bạn phải mua khóa học để comment !!!');
                        setTimeout(function () {
                            window.location.href = 'index.php?page=infor_course&id=<?= $_GET['id'] ?>';
                        }, 500);
                    </script>
                <?php
            } else if (check_fl($_SESSION['user']['id_user'], $_GET['id']) && count_cmt_by_user($_SESSION['user']['id_user'], $_GET['id'])['cmt'] > 3) {
                header('Refresh:0.5 URL=index.php?page=infor_course&id=' . $_GET['id']);
                ?>
                        <script>
                            alert('Mỗi Khóa Học Chỉ Có Thể Comment Tối Đa 3 Lần !!!');
                            setTimeout(function () {
                                window.location.href = 'index.php?page=infor_course&id=<?= $_GET['id'] ?>';
                            }, 500);
                        </script>
                <?php
            }
            break;
        case 'view_chap':
            $chap = chap($_GET['id']);
            $list_chap = chap_by_course($chap['id_course']);
            include "view/course/chap.php";
            break;
        //<===========================TEACHER==============================>
        case 'teacher':
            $teachers=list_teacher();
            include "view/teacher/teacher.php";
            break;
        case 'view_teacher':
            $teacher = view_teacher($_GET['id']);
            $courses = list_course_by_teacher($_GET['id']);
            include "view/teacher/view_teacher.php";
            break;
        //<===========================CONTACT==============================>
        case 'contact':
            include "view/home/contact.php";
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $content=$_POST['content'];
                include "PHPMailer/contact.php";
                header('Refresh:0.1 URL=index.php');
                ?>
                <script>
                    alert('Yêu Cầu Của Bạn Đã Được Gửi Chúng Tôi Sẽ Phản Hồi Bạn Sớm Nhất Có Thể !!!');
                    setTimeout(function () {
                        window.location.href = 'index.php';
                    }, 100);
                </script>
                <?php
            }
            break;
        //<===========================DEFAULT==============================>
        default:
            header('location: 404.php');
            break;
    }

} else {

    include "view/main/body.php";
    include "view/main/footer.php";

}

// 


?>