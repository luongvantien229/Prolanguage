<!-- ================ Order Details List ================= -->
<div class="details">
    <div class="recentOrders" style="width: 1200px;">
        <div class="cardHeader">
            <h2>List Comment</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <td>User</td>
                    <td>Course</td>
                    <td>Content</td>
                    <td>Date</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_cmt as $item) {
                    extract($item);
                    ?>
                    <tr>
                        <td><?=name_user($item['id_user'])?></td>
                        <td><?=name_course($item['id_course'])['name_course']?></td>
                        <td width="700px"><?=$item['content']?></td>
                        <td><?=$item['date']?></td>
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
