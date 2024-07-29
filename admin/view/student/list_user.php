<div class="recentCustomers">
    <div class="cardHeader">
        <h2>All User</h2>
    </div>
    <table>
        <thead>
            <tr background-color:blue>
                <th></th>
                <th>Tên</th>
                <th>user_name</th>
                <th>email</th>
                <th>số dư</th>
                <th>Trạng thái</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_user as $item) {
                extract($item);
                ?>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="../content/img/user/<?= $item['image'] ?>" alt=""></div>
                    </td>
                    <td>
                        <?= $item['name_user'] ?>
                    </td>
                    <td>
                        <?= $item['user_name'] ?>
                    </td>
                    <td>
                        <?= $item['email'] ?>
                    </td>

                    <td>
                        <h4> <br> <span>
                                <?= vietnamdong($item['monney']) ?>
                            </span></h4>
                    </td>
                    <?php
                    if ($item['active'] == 1) {
                        ?>
                        <td><span style="background-color:green; padding:5px; border-radius:10px; width:127px;">Đang hoạt
                                động</span></td>
                        <td><a href="index.php?ctrl=lock_user&id=<?=$item['id_user']?>"><span style="background-color:red; padding:5px; border-radius:10px; width:127px;">Khóa</span></a></td>        
                    <?php } else { ?>
                        <td><span style="background-color:red; padding:5px; border-radius:10px; width:127px;">Đang Khóa</span>
                        </td>
                        <td><a href="index.php?ctrl=unlock_user&id=<?=$item['id_user']?>"><span style="background-color:green; padding:5px; border-radius:10px; width:127px;">Mở khóa</span></a></td> 
                        <?php
                    }
                    ?>
                    
                </tr>
                <?php
            } ?>
        </tbody>
    </table>
</div>
<style>
    a{
        color: #000;
        text-decoration: none;
    }
</style>