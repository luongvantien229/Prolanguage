<!-- ================ Order Details List ================= -->
<div class="details">
    <div class="recentOrders" style="width: 1000px;">
        <div class="cardHeader">
            <h2>List Event</h2>
            <a href="index.php?ctrl=add_event" class="btn">Add event</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Image</td>
                    <td>Day Start</td>
                    <td>Day End</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_event as $item) {
                    extract($item);
                    ?>
                    <tr>
                        <td>
                            <img src="../content/img/event/<?= $item['image_event'] ?>" alt="" width="400px" style="border-radius:15px">
                        </td>
                        <td>
                            <?= $item['day_start'] ?>
                        </td>
                        <td>
                            <?= $item['day_end'] ?>
                        </td>
                        
                        <td>
                            <a href="index.php?ctrl=view_event&id=<?=$item['id_event']?>" class="link_course">Xem Chi Tiết</a>
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