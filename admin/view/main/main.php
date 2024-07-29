<!-- ================ Order Details List ================= -->
<div class="details">
    <div class="recentOrders">
        <div class="cardHeader">
            <h2>New Course</h2>
            <a href="index.php?ctrl=course" class="btn">View All</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Date</td>
                    <td>Member</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($course_new as $item) {
                    extract($item);
                    ?>
                    <tr>
                        <td>
                            <?= $item['name_course'] ?>
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
                            <?= $item['date'] ?>
                        </td>
                        <td>
                            <?= $item['member'] ?>
                        </td>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    <!-- ================= New Customers ================ -->
    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>New User</h2>
            <a href="index.php?ctrl=user" class="btn">View All</a>
        </div>
        <table>
            <?php
            foreach ($user_rich as $item) {
                extract($item);
                ?>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="../content/img/user/<?= $item['image'] ?>" alt=""></div>
                    </td>
                    <td>
                        <?= $item['name_user'] ?>
                    </td>
                    
                </tr>
            <?php
            } ?>
        </table>
    </div>
</div>
