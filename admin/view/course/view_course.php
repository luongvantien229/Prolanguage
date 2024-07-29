<div class="container">
<a href="index.php?ctrl=course" class="btn" style="margin-left:50px; padding-bottom: 15px;"><strong>Trở Lại</strong></a>
    <section class="view_course">
        <div>
            <img src="../content/img/course/<?= $course['image'] ?>">
            <hr>
            <br>
            <h2>
                <?= $course['name_course'] ?>
            </h2>
            <h3>Giảng Viên:
                <?php
                $name = name_teacher($course['id_teacher']);
                echo $name;
                ?>
            </h3>
            <h4>Loại ngôn ngữ:
                <?php
                $name = name_language($course['id_language']);
                echo $name['name_language'];
                ?>
            </h4>
        </div>
        <div>
            <form action="index.php?ctrl=update_course" method="post">
                <input type="number" name="price" min="0" step="10000" value="<?= $course['price'] ?>">
                <input type="text" value="<?= $course['date'] ?>" disabled>
                <input type="text" value="Số Lượng Học Viên: <?= $course['member'] ?>" disabled>
                <input type="hidden" name="id_course" value="<?=$course['id_course']?>">
                <br>
                <input type="submit" name="change" value="Change">
            </form>
            <br>
            
            <a href="index.php?ctrl=del_course&id=<?=$course['id_course']?>"><span class="del">Xóa</span></a>
            <?php
            if ($course['active'] == 1) {
                echo '<a href="index.php?ctrl=lock_course&id='.$course['id_course'].'"><span class="lock">Change Active</span></a>';
            } else
                echo '<a href="index.php?ctrl=unlock_course&id='.$course['id_course'].'"><span class="unlock">Change Active</span></a>';
            ?>
            
            <a href="?ctrl=view_chap&id=<?=$course['id_course']?>" class="btn">Chapter</a>


        </div> 
    </section>

</div>

<style>
    .view_course {
        margin-left: 50px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 20px;
        max-width: 80%;
        background-color: rgb(242, 242, 242);
        min-height: 500px;
        padding: 20px;
        border-radius: 15px;
        margin-bottom: 15px;
    }

    .view_course img {
        border-radius: 15px;
        width: 100%;
    }

    .view_course img:hover {
        transform: scale(1.02);
    }

    .view_course input {
        width: 300px;
        height: 30px;
        border-radius: 5px;
        padding: 5px;
        margin: 5px;
        font-size: 1.2rem;
        border: 1.5px solid #000000;
    }

    .view_course input[type=submit] {
        height: 30px;
        width: 80px;
        background-color: rgba(220, 239, 255, 0.76);
        border: 1px solid #000000;
        background-color: aliceblue;
    }

    a {
        text-decoration: none;
        color: #fff;
        font-size: 1.2rem;
        padding: 5px;
        margin: 5px;
    }

    .btn {
        color: #000000;

    }

    .lock {
        background-color: rgb(0, 214, 0);
        padding: 5px;
        margin-top: 10px;
        border-radius: 5px;
    }

    .lock:hover {
        background-color: rgb(255, 73, 73);
        color: #323232;
        margin-top: 10px;
        border-radius: 5px;
    }

    .unlock {
        background-color: rgb(255, 73, 73);
        color: #323232;
        margin-top: 10px;
        border-radius: 5px;
        padding: 5px;
    }

    .unlock:hover {
        background-color: rgb(0, 214, 0);
        color: #fff;
        border-radius: 5px;
    }

    .del {
        background-color: rgb(221, 158, 11);
        padding: 5px;
        padding-left: 10px;
        padding-right: 10px;
        margin: 25px;
        border-radius: 5px;
    }

    .del:hover {
        background-color: rgb(255, 29, 29);
        color: #000000;
    }
</style>