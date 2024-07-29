<style>
    .body_form {
        display: grid;
        grid-template-columns: 4fr 2fr;
        margin: 5% 10%;
    }

    .left {
        display: flex;
        flex-direction: column;
        justify-content: center;
        background-color: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .left .img {
        text-align: center;
        margin-bottom: 20px;
    }

    .left .img img {
        width: 500px;

    }

    .left .content {
        margin-bottom: 20px;
    }

    .left h2,
    .left h3,
    .left h4 {
        color: #333;
    }

    .left p {
        color: #555;
    }

    .left .buy_button {
        text-align: center;
        margin-top: 20px;
    }

    .left .buy_button a {
        text-decoration: none;
        color: #fff;
        font-size: 1.2rem;
        padding: 12px 25px;
        border-radius: 20px;
        background-color: #ffa000;
        display: inline-block;
    }

    .chapter {
        margin-bottom: 20px;
    }

    li {
        display: flex;
        align-items: center;
        margin: 10px;
    }

    li p {
        flex: 1;
        color: #333;
        padding: 5px;
        font-size: 1.3rem;
    }

    li a {
        text-decoration: none;
        color: #fff;
        font-size: 1rem;
        padding: 8px 15px;
        border-radius: 20px;
        background-color: #4caf50;
        margin-left: 10px;
    }

    .right {
        margin-top: 50px;
    }

    .send_cmt {
        text-align: right;
        margin-bottom: 50px;
    }

    .send_cmt textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .send_cmt input[type="submit"] {
        background-color: #ffa000;
        color: #fff;
        border: 0;
        padding: 8px 15px;
        font-size: 1.1rem;
        border-radius: 20px;
    }

    .cmt li {
        margin-bottom: 20px;
        padding: 15px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .cmt li p {
        font-size: 1rem;

    }

    .cmt img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
        border-radius: 50%;
    }
</style>

<div class="body_form">
    <div class="left">
        <div class="img">
            <img src="content/img/course/<?= $course['image'] ?>" alt="Course Image">
        </div>
        <div class="buy_button">
            <?php
            if (isset($_SESSION['user']) && check_fl($_SESSION['user']['id_user'], $_GET['id']) === false) {
                ?>
                <a href="?page=fl_course&id=<?= $course['id_course'] ?>">Mua Khóa Học</a>
                <?php
            }
            ?>
        </div>
        <div class="content">
            <h2>
                <?= $course['name_course'] ?>
            </h2>
            <h3>
                <?php
                $name = name_teacher($course['id_teacher']);
                echo $name;
                ?>
            </h3>
            <h4>
                <?php
                if (isset($_SESSION['user']) && check_fl($_SESSION['user']['id_user'], $_GET['id']) === false) {
                    if ($course['price'] == 0) {
                        echo "FREE";
                    } else
                        echo vietnamdong($course['price']);
                }

                ?>
            </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium corrupti eum consectetur
                odit quae, delectus deleniti eveniet facilis repellat et illo sequi asperiores, consequatur quod
                incidunt laborum sed. Perspiciatis.
                Error sunt libero eius natus fuga dicta suscipit deserunt officiis non. Exercitationem rerum accusamus
                autem minus, libero qui soluta quae optio? Assumenda distinctio aperiam ex voluptatem dolores ducimus
                eum magni!
                Magnam aut voluptatibus earum ab, sed distinctio nobis ea? Earum unde, dolore maxime, reiciendis error
                expedita accusamus nulla ducimus in a repellat magnam atque sunt animi temporibus eaque delectus eum!
            </p>
        </div>
        <?php
        if (isset($_SESSION['user']) &&check_fl($_SESSION['user']['id_user'], $_GET['id'])) {
            ?>
            <div class="chapter">
                <h2>Các Bài Học</h2>
                <ul>
                    <?php
                    foreach ($chapter as $item) {
                        extract($item);
                        ?>
                        <li>
                            <p>
                                <?= $item['name_chap'] ?>
                            </p>
                            <a href="index.php?page=view_chap&id=<?= $item['id_chap']?>">View</a>
                        </li>
                        <?php
                    }
                    ?>

                </ul>
            </div>
            <?php
        }
        ?>

        <!-- <iframe width="700" height="400" src="https://www.youtube.com/embed/IIol9G5Xvzs" title="[S9] Tuyển Tập Hoạt Hình Doraemon Phần 7 - Trọn Bộ Hoạt Hình Doraemon Lồng Tiếng Viêt" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    </div>
    <div class="right">
        <div class="send_cmt">
            <h3>Đánh Giá</h3>
            <form action="?page=cmt_course&id=<?= $course['id_course'] ?>" method="post">
                <textarea name="content" id="" cols="60" rows="10" placeholder="Nhận xét của bạn"
                    style="width: 90%;"></textarea><br>
                <input type="submit" name="add" value="Gửi">
            </form>
        </div>
        <div class="cmt">
            <ul>
                <?php
                foreach ($cmt as $item) {
                    extract($item);
                    ?>
                    <li style="position:relative">
                        <img src="content/img/user/<?= img_user($item['id_user']) ?>" alt="User Avatar">
                        <h5 style="position:absolute; top:0; left:25%; margin-bottom: 5px;">
                            <?= name_user($item['id_user']) ?>
                        </h5>
                        <p style="margin-top:10px;">
                            <?= $item['content'] ?>
                        </p>
                    </li>
                    <?php

                }

                ?>

            </ul>
        </div>
    </div>
</div>