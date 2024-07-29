<!-- ================ Order Details List ================= -->
<div class="details">
    <div class="recentOrders" style="width: max-content;">
        <div class="cardHeader">
            <h2>List Course</h2>
            <a href="index.php?ctrl=add_course" class="btn">Add Course</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Image</td>
                    <td>Price</td>
                    <td>Member</td>
                    <td>Name Teacher</td>
                    <td>Language</td>
                    <td>Active</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_course as $item) {
                    extract($item);
                    ?>
                    <tr>
                        <td>
                            <?= $item['name_course'] ?>
                        </td>
                        <td>
                            <img src="../content/img/course/<?= $item['image'] ?>" alt="" width="80px">
                        </td>
                        <?php
                        if ($item['price'] != 0) {
                            ?>
                            <td>
                                <?= vietnamdong($item['price']) ?>
                            </td>
                            <?php
                        } else
                            echo "<td>free</td>";
                        ?>
                        <td>
                            <?= $item['member'] ?>
                        </td>
                        <td>
                            <span>
                                <?php
                                $name = name_teacher($item['id_teacher']);
                                echo $name;
                                ?>
                            </span>
                        </td>
                        <td>
                            <span>
                                <?php
                                $name = name_language($item['id_language']);
                                echo $name['name_language'];
                                ?>
                            </span>
                        </td>
                        <?php
                        if ($item['active'] == 1) {
                            ?>
                            <td><span style="background-color:green; padding:5px; border-radius:10px; width:127px;">Đang hoạt
                                    động</span></td>
                        <?php } else { ?>
                            <td><span style="background-color:red; padding:5px; border-radius:10px; width:127px;">Đang
                                    Khóa</span>
                            </td>
                            <?php
                        }
                        ?>
                        <td>
                            <a href="index.php?ctrl=view_course&id=<?=$item['id_course']?>" class="link_course">Xem Chi Tiết</a>
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
    .link_course{
        background-color: greenyellow;
        text-decoration: none;
        color: black;
        padding: 5px;
        border-radius: 10px;
    }
    .link_course:hover{
        color: #fff;
    }
</style>