<!-- Carousel Start -->
<div class="container-fluid p-0 pb-5 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php
            $list_event = event_today();
            $i = 1;
            foreach ($list_event as $item) {
                extract($item);
                if ($i == 1) {
                    ?>
                    <div class="carousel-item active" style="max-height: 570px;">
                        <img class="position-relative w-100" src="content/img/event/<?=$item['image_event']?>"
                            style="max-height: 570px; object-fit: cover;">
                    </div>
                    <?php
                    $i++;
                } else {
                    ?>
                    <div class="carousel-item" style="max-height:570px;">
                        <img class="position-relative w-100" src="content/img/event/<?=$item['image_event']?>"
                            style="max-height: 570px; object-fit: cover;">
                    </div>
                <?php
                $i++;
                }
            }

            ?>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="content/img/no-signal/pro.jpg" alt="">
            </div>
            <div class="col-lg-7">
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                    <h1>Innovative Way To Learn</h1>
                </div>
                <p>
                    Welcome to Innovative Way To Learn, where education meets creativity and knowledge blossoms through
                    cutting-edge methodologies. We believe that learning is a dynamic and transformative journey, and we
                    are here to redefine the way you engage with knowledge.
                </p>
                <p>
                    At <strong style="color:#ff6600">Pro-Language</strong> , we understand that traditional approaches to
                    education may not always cater to the
                    diverse needs and learning styles of individuals. That's why we've embarked on a mission to
                    revolutionize the learning experience by integrating innovation, technology, and personalized
                    strategies.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Category Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Subjects</h5>
            <h1>Explore Top Subjects</h1>
        </div>
        <div class="row">
            <?php
            $list_language = list_language_pop();
            foreach ($list_language as $item) {
                extract($item);
                ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="content/img/language/<?= $item['image'] ?>" alt=""
                            style="height: 180px;">
                        <a class="cat-overlay text-white text-decoration-none" href="index.php?page=course&id=<?= $item['id_language'] ?>">
                            <h4 class="text-white font-weight-medium">
                                <?= $item['name_language'] ?>
                            </h4>
                            <span>
                                <?= count_course_by_language($item['id_language'])['course'] ?> Courses
                            </span>
                        </a>
                    </div>
                </div>
                <?php
            }

            ?>
        </div>
    </div>
</div>
<!-- Category Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses Free</h5>
            <h1>Our Free Courses</h1>
        </div>
        <div class="row">
            <?php
            $list_free_course = list_free_course();
            foreach ($list_free_course as $item) {
                extract($item);
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="content/img/course/<?= $item['image'] ?>"
                            style="width:350px; height:230px;" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>
                                    <?= $item['member'] ?> Students
                                </small>
                            </div>
                            <a class="h5" href="?page=infor_course&id=<?=$item['id_course']?>">
                                <?= $item['name_course'] ?>
                            </a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">

                                    <?php
                                    if ($item['price'] != 0) {
                                        ?>
                                        <h5 class="m-0">
                                            <?= vietnamdong($item['price']) ?>
                                        </h5>
                                        <?php
                                    } else {
                                        ?>
                                        <h5 class="m-0">FREE</h5>
                                        <?php
                                    }

                                    ?>
                                    <h5 class="m-0">
                                        <?php
                                        $name = name_teacher($item['id_teacher']);
                                        echo $name;
                                        ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<!-- Courses Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Popular Courses</h5>
            <h1>Our Popular Courses</h1>
        </div>
        <div class="row">
            <?php
            $list_pop_course = list_pop_course();
            foreach ($list_pop_course as $item) {
                extract($item);
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="content/img/course/<?= $item['image'] ?>"
                            style="width:350px; height:230px;" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>
                                    <?= $item['member'] ?> Students
                                </small>
                            </div>
                            <a class="h5" href="?page=infor_course&id=<?=$item['id_course']?>">
                                <?= $item['name_course'] ?>
                            </a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">

                                    <?php
                                    if ($item['price'] != 0) {
                                        ?>
                                        <h5 class="m-0">
                                            <?= vietnamdong($item['price']) ?>
                                        </h5>
                                        <?php
                                    } else {
                                        ?>
                                        <h5 class="m-0">FREE</h5>
                                        <?php
                                    }

                                    ?>
                                    <h5 class="m-0">
                                        <?php
                                        $name = name_teacher($item['id_teacher']);
                                        echo $name;
                                        ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>


        </div>
    </div>
</div>
<!-- Courses End -->



<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
            <h1>Meet Our Teachers</h1>
        </div>
        <div class="teacher-body">
            <div class="teacher-show">
                <?php
                $list_teacher = list_teacher_5();
                $i = 1;
                foreach ($list_teacher as $item) {
                    extract($item);
                    ?>
                    <div class="box box-<?= $i ?>" style="--img: url(content/img/teacher/<?= $item['image_teacher'] ?>);"
                        data-text="<?= $item['name_teacher'] ?>"></div>
                    <?php
                    $i++;
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
            <h1>What Say Our Students</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-normal mb-4">Hoàng, một sinh viên ngành lập trình, thường xuyên gặp khó
                            khăn trong quá trình học. Trang web e-learning mà anh tham gia không chỉ có hệ thống hỗ trợ
                            qua email và diễn đàn mà còn cung cấp các buổi tư vấn trực tuyến hàng tuần. Anh có thể đặt
                            câu hỏi trực tiếp cho giáo viên và nhận được giải đáp ngay lập tức, giúp anh không bị mắc
                            kẹt trong quá trình học tập. Điều này làm tăng sự tự tin và động lực học tập của Minh.</h4>
                        <img class="img-fluid mx-auto mb-3" src="content/img/no-signal/hoang.jpg" alt="">
                        <h5 class="m-0">Phạm Văn Hoàng</h5>
                        <span>Sinh Viên</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-normal mb-4">Ninh, một học viên ngành thiết kế đồ họa, rất ấn tượng với
                            trang web e-learning mà cô sử dụng. Các bài giảng không chỉ bao gồm văn bản mà còn có video
                            hướng dẫn, bài thực hành trực tuyến và cả bài kiểm tra tương tác. Cô có thể chia sẻ ý kiến
                            và kinh nghiệm của mình thông qua diễn đàn, nhận phản hồi từ giáo viên và đồng học, tạo ra
                            một cộng đồng học tập đa chiều</h4>
                        <img class="img-fluid mx-auto mb-3" src="content/img/no-signal/ninh.jpg" alt="">
                        <h5 class="m-0">Châu An Ninh</h5>
                        <span>Sinh Viên</span>
                    </div>
                    <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-normal mb-4">Quyên, một sinh viên ngành ngôn ngữ học, rất ấn tượng với
                            cách trang web e-learning tích hợp tương tác và hỗ trợ từ cộng đồng học viên. Trang web cho
                            phép Linh tham gia vào các nhóm nghiên cứu trực tuyến, nơi cô có thể chia sẻ tài liệu và ý
                            kiến với đồng học cùng chuyên ngành. Bên cạnh đó, hệ thống hỏi đáp nhanh chóng giúp Linh
                            nhận được sự giúp đỡ từ giáo viên và sinh viên khác khi cô gặp khó khăn trong quá trình học.
                            Điều này không chỉ tạo ra một môi trường học tập tích cực mà còn giúp Linh phát triển kỹ
                            năng giao tiếp và hợp tác trong cộng đồng trực tuyến.</h4>
                        <img class="img-fluid mx-auto mb-3" src="content/img/no-signal/quyen.jpg" alt="">
                        <h5 class="m-0">Nguyễn Thảo Quyên</h5>
                        <span>Sinh Viên</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
<style>
    @import url("https://fonts.googleapis.com/css2?family=Figtree&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Figtree", sans-serif;
    }

    .teacher-body {
        display: grid;
        place-content: center;
        min-height: 80vh;

    }

    .teacher-show {
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        gap: 1em;
        width: 800px;
        height: 500px;
        transition: all 400ms;
    }

    .teacher-show:hover .box {
        filter: grayscale(100%) opacity(24%);
    }

    .box {
        position: relative;
        background: var(--img) center center;
        background-size: cover;
        transition: all 400ms;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .teacher-show .box:hover {
        filter: grayscale(0%) opacity(100%);
    }

    .teacher-show:has(.box-1:hover) {
        grid-template-columns: 3fr 1fr 1fr 1fr 1fr;
    }

    .teacher-show:has(.box-2:hover) {
        grid-template-columns: 1fr 3fr 1fr 1fr 1fr;
    }

    .teacher-show:has(.box-3:hover) {
        grid-template-columns: 1fr 1fr 3fr 1fr 1fr;
    }

    .teacher-show:has(.box-4:hover) {
        grid-template-columns: 1fr 1fr 1fr 3fr 1fr;
    }

    .teacher-show:has(.box-5:hover) {
        grid-template-columns: 1fr 1fr 1fr 1fr 3fr;
    }



    .box::after {
        content: attr(data-text);
        position: absolute;
        bottom: 20px;
        background: #000;
        color: #fff;
        padding: 10px 10px 10px 14px;
        letter-spacing: 4px;
        text-transform: uppercase;
        transform: translateY(60px);
        opacity: 0;
        transition: all 400ms;
    }

    .box:hover::after {
        transform: translateY(0);
        opacity: 1;
        transition-delay: 600ms;
    }
</style>