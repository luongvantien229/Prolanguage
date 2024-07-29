<!-- ================ Order Details List ================= -->
<div class="details">
    <div class="recentOrders" style="width: 150%;">
        <div class="cardHeader">
            <h2>List chapter of <?=$course['name_course']?></h2>
            <a href="index.php?ctrl=add_chap&id=<?=$course['id_course']?>" class="btn">Add chapter</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Media</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($chapter as $item) {
                    extract($item);
                    ?>
                    <tr>
                        <td>
                            <?= $item['name_chap'] ?>
                        </td>
                        <td>
                            <?= $item['media'] ?>
                        </td>
                        <td>
                            <a href="?ctrl=del_chap&id=<?= $item['id_chap']?>" class="btn">Xóa</a>
                        </td>
                        <td>
                            <a href="index.php?ctrl=view_media&id=<?= $item['id_chap'] ?>" class="link_course">Xem Chi
                                Tiết</a>
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
    th,
    td {
        text-align: left;
    }

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

    .details .recentOrders table tr td:nth-child(2) {
        text-align: start;
    }
</style>