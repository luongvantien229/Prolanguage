<!-- ================ Order Details List ================= -->
<div class="details">
    <div class="recentOrders" style="width: 1000px;">
        <div class="cardHeader">
            <h2>List Course</h2>
            <a href="index.php?ctrl=add_teacher" class="btn">Add Teacher</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Name Teacher</td>
                    <td>Image</td>
                    <td>Language</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_teacher as $item) {
                    extract($item);
                    ?>
                    <tr>
                        <td>
                            <strong>
                                <?= $item['name_teacher'] ?>
                            </strong>
                        </td>
                        <td>
                            <img src="../content/img/teacher/<?= $item['image_teacher'] ?>" alt="" width="150px"
                                style="border-radius:15px;">
                        </td>
                        <td>
                            <span>
                                <strong>
                                    <?php
                                    $name = name_language($item['id_language']);
                                    echo $name['name_language'];
                                    ?>
                                </strong>
                            </span>
                        </td>
                        <td>
                            <a href="index.php?ctrl=del_teacher&id=<?= $item['id_teacher'] ?>" class="btn">Xóa</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>

</div>
<style>
    .link_course {
        background-color: greenyellow;
        text-decoration: none;
        color: black;
        padding: 5px;
        border-radius: 10px;
    }

    .link_course:hover {
        color: #fff;
    }

    .btn {
        position: relative;
        padding: 5px 10px;
        background: #e23423;
        text-decoration: none;
        color: #fff;
        border-radius: 6px;
    }
    .btn:hover{
        color: black;
    }
</style>