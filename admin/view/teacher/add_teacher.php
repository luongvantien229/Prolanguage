<div class="container">

    <section class="view_course">
        <form action="index.php?ctrl=add_teacher" method="post" enctype="multipart/form-data">
            <input type="text" name="name_teacher" placeholder="Tên Giảng Viên" required>
            <input type="file" name="image" required accept="image/*">
            <select name="language" id="" required>
                <?php
                foreach ($list as $language) {
                    ?>
                    <option value="<?= $language['id_language'] ?>">
                        <?= $language['name_language'] ?>
                    </option>
                    <?php
                }
                ?>
            </select>
            <input type="submit" name="add" value="Add Teacher">
        </form>
    </section>

</div>

<style>
    .view_course {
        margin-left: 50px;
        /* display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 20px; */
        max-width: 90%;
        background-color: rgb(242, 242, 242);
        min-height: 500px;
        padding: 20px;
        border-radius: 15px;
    }

    .view_course img {
        border-radius: 15px;
        width: 100%;
    }

    .view_course img:hover {
        transform: scale(1.02);
    }

    .view_course form {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    .view_course input {
        width: 450px;
        height: 40px;
        border-radius: 5px;
        padding: 5px;
        margin: 5px;
        font-size: 1.2rem;
        border: 1.5px solid #000000;
    }

    form select {
        width: 450px;
        height: 40px;
        border-radius: 10px;
        font-size: 1.2rem;
        padding: 5px;
    }

    form select option {
        font-size: 1.2rem;
        padding: 5px;

    }

    .view_course input[type=submit] {
        height: 40px;
        width: 150px;
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