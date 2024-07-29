<?php
ob_start();
include "../global.php";
include "../dao/pdo.php";
include "../dao/admin.php";
include "../dao/main.php";
include "../dao/user.php";
include "../dao/course.php";
include "../dao/teacher.php";
include "../dao/language.php";
include "../dao/cmt.php";
include "../dao/event.php";
include "../dao/chapter.php";

if (isset($_SESSION['accept']) && $_SESSION['accept'] == 1) {
    $count_user = count_user();
    $count_course = count_course();
    $count_cmt = count_cmt();
    $count_teacher = count_teacher();
    include "view/home/header.php";
    if (isset($_GET['ctrl'])) {
        $ctrl = $_GET['ctrl'];
        switch ($ctrl) {
            case 'main':
                $course_new = course_new();
                $user_rich = user_rich();
                include "view/main/main.php";
                break;
            //<=================  User  ===================>
            case 'user':
                $list_user = list_user();
                include "view/student/list_user.php";
                break;
            case 'lock_user':
                lock($_GET['id']);
                $list_user = list_user();
                include "view/student/list_user.php";
                break;
            case 'unlock_user':
                unlock($_GET['id']);
                $list_user = list_user();
                include "view/student/list_user.php";
                break;
            //<=================  Course  ===================>
            case 'course':
                $list_course = list_course();
                include "view/course/list_course.php";
                break;
            case 'view_course':
                $course = view_course($_GET['id']);
                include "view/course/view_course.php";
                break;
            case 'update_course':
                if (isset($_POST['change']) && $_POST['change']) {
                    $price = $_POST['price'];
                    $id = $_POST['id_course'];
                    change_price($id, $price);
                }
                ?>
                <script>
                    alert("Đã Thay đổi giá tiền thành công");
                </script>
                <?php
                $course = view_course($id);
                include "view/course/view_course.php";
                break;
            case 'lock_course':
                lock_course($_GET['id']);
                ?>
                <script>
                    alert("Đã Khóa thành công");
                </script>
                <?php
                $course = view_course($_GET['id']);
                include "view/course/view_course.php";
                break;
            case 'unlock_course':
                unlock_course($_GET['id']);
                ?>
                <script>
                    alert("Đã mở khóa thành công");
                </script>
                <?php
                $course = view_course($_GET['id']);
                include "view/course/view_course.php";
                break;
            case 'add_course':
                $list = list_teacher();
                include "view/course/add_course.php";
                if (isset($_POST['add']) && $_POST['add']) {
                    $name = $_POST['name_course'];
                    $image = save_file('image', '../content/img/course/');
                    $price = $_POST['price'];
                    $teacher = $_POST['teacher'];
                    $type_language = check_language_by_teacher($teacher);
                    $date = date('Y-m-d');
                    add_course($name, $image, $price, $date, $teacher, $type_language['id_language']);
                    ?>
                    <!-- <script>
                    alert('Thêm Khóa Học Thành Công');
                </script> -->
                    <?php
                    $list_course = list_course();
                    header('location: index.php?ctrl=course');
                    exit;
                }
                break;
            case 'del_course':
                $id = $_GET['id'];
                $course = view_course($_GET['id']);
                del_course($id);
                $list_course = list_course();
                include "view/course/list_course.php";
                break;
            // <================  Chapter  ===================>
            case 'view_chap':
                $chapter = chap_by_course($_GET['id']);
                $course = view_course($_GET['id']);
                include "view/chapter/view_chap.php";
                break;
            case 'view_media':
                $media = chap($_GET['id']);
                include "view/chapter/view_media.php";
                break;
            case 'update_chap':
                if (isset($_POST['add']) && $_POST['add']) {
                    update_chap($_POST['id'], $_POST['name_chap'], $_POST['meida'], $_POST['type']);

                    header('Refresh:0.5 URL=index.php?ctrl=view_media&id=' . $_POST['id']);
                    ?>
                    <script>
                        alert('Update successfully !!!');
                        setTimeout(function () {
                            window.location.href = 'index.php?ctrl=view_media&id='.$_POST['id'];
                        }, 500);
                    </script>
                    <?php
                }
                break;
            case 'add_chap':
                include "view/chapter/add_chap.php";
                if (isset($_POST['add']) && $_POST['add']) {
                    add_chap($_GET['id'], $_POST['name_chap'], $_POST['media'], $_POST['type']);
                    header('Refresh:0.5 URL=index.php?ctrl=course');
                    ?>
                    <script>
                        alert('Add Chap successfully !!!');
                        setTimeout(function () {
                            window.location.href = 'index.php?ctrl=course';
                        }, 500);
                    </script>
                    <?php
                }
                break;
            case 'del_chap':
                del_chap($_GET['id']);
                header('Refresh:0.5 URL=index.php?ctrl=course');

                ?>
                <script>
                    alert('Delete Chap successfully !!!');
                    setTimeout(function () {
                        window.location.href = 'index.php?ctrl=course';

                    }, 500);
                </script>
                <?php
                break;
            //<=================  Teacher  ===================>
            case 'teacher':
                $list_teacher = list_teacher();
                include "view/teacher/list_teacher.php";
                break;
            case 'add_teacher':
                $list = list_language();
                include "view/teacher/add_teacher.php";
                if (isset($_POST['add']) && $_POST['add']) {
                    $name = $_POST['name_teacher'];
                    $image = save_file('image', '../content/img/teacher/');
                    $type_language = $_POST['language'];
                    add_teacher($name, $type_language, $image);
                    ?>
                    <?php
                    $list_teacher = list_teacher();
                    header('location: index.php?ctrl=teacher');
                    exit;
                }
                break;
            case 'del_teacher':
                $id = $_GET['id'];
                if (check_teacher($id) === false) {
                    $teacher = view_teacher($_GET['id']);
                    $link = "../content/img/teacher/" . $teacher['image_teacher'];
                    unlink($link);
                    del_teacher($id);
                    header('Refresh:0.5 URL=index.php?ctrl=teacher');
                    ?>
                    <script>
                        alert('Delete that teacher successfuly !!!');
                        setTimeout(function () {
                            window.location.href = 'index.php?ctrl=teacher';
                        }, 500);
                    </script>
                    <?php
                } else {
                    header('Refresh:0.5 URL=index.php?ctrl=teacher');
                    ?>
                    <script>
                        alert('You can not Delete that teacher because whose course in your website !!!');
                        setTimeout(function () {
                            window.location.href = 'index.php?ctrl=teacher';
                        }, 500);
                    </script>
                    <?php
                }



                break;
            //<=================  Language  ===================>
            case 'language':
                $list_language = list_language();
                include "view/language/list_language.php";
                break;
            case 'add_language':
                include "view/language/add_language.php";
                if (isset($_POST['add']) && $_POST['add']) {
                    $name = $_POST['name_language'];
                    $image = save_file('image', '../content/img/language/');
                    add_language($name, $image);
                    header('location: index.php?ctrl=language');
                    exit;
                }
                break;
            case 'lock_language':
                lock_language($_GET['id']);
                header('location: index.php?ctrl=language');
                break;
            case 'unlock_language':
                unlock_language($_GET['id']);
                header('location: index.php?ctrl=language');
                break;
            case 'update_language':
                $language = get_language($_GET['id']);
                include "view/language/update_language.php";
                if (isset($_POST['add']) && $_POST['add']) {
                    $name = $_POST['name_language'];
                    $id = $_POST['id'];
                    update_language($id, $name);
                    header('location: index.php?ctrl=language');
                    exit;
                }
                break;
            case 'del_language':
                del_language($_GET['id']);
                header('location: index.php?ctrl=language');
                break;
            //<=================  Comment  ===================>
            case 'comment':
                $list_cmt = list_cmt();
                include "view/cmt/list_cmt.php";
                break;
            //<=================  Event  ===================>
            case 'event':
                $list_event = list_event();
                include "view/event/list_event.php";
                break;
            case 'view_event':
                $event = get_event($_GET['id']);
                include "view/event/view_event.php";
                break;
            case 'add_event':
                include "view/event/add_event.php";
                if (isset($_POST['add']) && $_POST['add']) {
                    $date_start = $_POST['date_start'];
                    $date_end = $_POST['date_end'];
                    if ($date_start < $date_end) {
                        $image = save_file('image', '../content/img/event/');
                        add_event($date_start, $date_end, $image);
                        header('Refresh:0.5; URL=index.php?ctrl=event');
                        ?>
                        <script type="text/javascript">
                            // Đoạn mã JavaScript để chuyển hướng sau 3 giây
                            alert("Event added successfully");
                            setTimeout(function () {
                                window.location.href = 'index.php?ctrl=event';
                            }, 500);
                        </script>
                        <?php
                    } else {
                        header('Refresh:0.5; URL=index.php?ctrl=add_event');
                        ?>
                        <script type="text/javascript">
                            // Đoạn mã JavaScript để chuyển hướng sau 3 giây
                            alert("Event added unsuccessfully");
                            setTimeout(function () {
                                window.location.href = 'index.php?ctrl=add_event';
                            }, 500);
                        </script>
                        <?php
                    }

                    // header('location: index.php?ctrl=event');
                    exit;
                }
                break;
            case 'update_event':
                if (isset($_POST['change']) && $_POST['change']) {
                    $date_start = $_POST['date_start'];
                    $date_end = $_POST['date_end'];
                    $id = $_POST['id_event'];
                    if ($date_start < $date_end) {
                        update_event($id, $date_start, $date_end);
                        header('Refresh:0.5 URL=index.php?ctrl=view_event&id=' . $id . '');
                        ?>
                        <script type="text/javascript">
                            // Đoạn mã JavaScript để chuyển hướng sau 3 giây
                            alert("Event updated successfully");
                            setTimeout(function () {
                                window.location.href = 'index.php?ctrl=view_event&id=<?= $id ?>';
                            }, 500);
                        </script>
                        <?php
                    } else {
                        header('Refresh:0.5 URL=index.php?ctrl=view_event&id=' . $id . '');
                        ?>
                        <script type="text/javascript">
                            // Đoạn mã JavaScript để chuyển hướng sau 3 giây
                            alert("Event updated unsuccessfully");
                            setTimeout(function () {
                                window.location.href = 'index.php?ctrl=view_event&id=<?= $id ?>';
                            }, 500);
                        </script>
                        <?php
                    }

                    exit;
                }
                break;
            case 'del_event':
                del_event($_GET['id']);
                header('location: index.php?ctrl=event');
                break;
            //<=================  Log Out  ===================>
            case 'logout':
                unset($_SESSION['accept']);
                header('location: index.php');
                break;
            default:
                header('location: 404.php');

                break;
        }
    } else {
        $course_new = course_new();
        $user_rich = user_rich();
        include "view/main/main.php";
    }
    include "view/home/footer.php";

} else {
    include "view/home/login.php";
    if (isset($_POST['login']) && $_POST['login']) {
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $admin = check_admin($username, $pass);
        if ($admin) {
            $_SESSION['accept'] = 1;
            // echo $_SESSION['accept'];
            header("Location: index.php");
        } else {

            ?>
            <script>
                alert("Tên Đăng Nhập Hoặc Mật Khẩu Sai!!!!");
            </script>
            //
            <?php
        }
    }
}
?>