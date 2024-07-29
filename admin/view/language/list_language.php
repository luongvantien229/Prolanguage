<!-- ================ Order Details List ================= -->
<div class="details">
    <div class="recentOrders" style="width: 1000px;">
        <div class="cardHeader">
            <h2>List Language</h2>
            <a href="index.php?ctrl=add_language" class="btn">Add Language</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Name Language</td>
                    <td>Image</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_language as $item) {
                    extract($item);
                    ?>
                    <tr>
                        <td>
                            <strong>
                                <?= $item['name_language'] ?>
                            </strong>
                        </td>
                        <td>
                            <img src="../content/img/language/<?= $item['image'] ?>" alt="" width="150px" height="100px"
                                style="border-radius:15px;">
                        </td>
                        <td>
                        <?php
                    if ($item['active'] == 1) {
                        ?>
                        <td><span style="background-color:green; padding:5px; border-radius:10px; width:127px;">Đang hoạt
                                động</span></td>
                        <td><a href="index.php?ctrl=lock_language&id=<?=$item['id_language']?>"><span style="background-color:red; padding:5px; border-radius:10px; width:127px;">Khóa</span></a></td>        
                    <?php } else { ?>
                        <td><span style="background-color:red; padding:5px; border-radius:10px; width:127px;">Đang Khóa</span>
                        </td>
                        <td><a href="index.php?ctrl=unlock_language&id=<?=$item['id_language']?>"><span style="background-color:green; padding:5px; border-radius:10px; width:127px;">Mở khóa</span></a></td> 
                        <?php
                    }
                    ?>
                        </td>
                    <td>
                        <a href="index.php?ctrl=update_language&id=<?=$item['id_language']?>" class="btn">Sửa</a>
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
        background-color: greenyellow ;
        text-decoration: none;
        color: black;
        padding: 5px;
        border-radius: 10px;
    }

    .link_course:hover {
        color: #fff;
    }
    a{
            color: #000;
            text-decoration: none;
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