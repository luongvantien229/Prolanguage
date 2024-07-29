<div class="container">

    <section class="view_course">
        <div>
            <img src="../content/img/event/<?= $event['image_event'] ?>">
            
        </div>
        <div>
            <form action="index.php?ctrl=update_event" method="post">
                
                <label for="">Day Start</label><br>
                <input type="date" name="date_start"   value="<?= $event['day_start'] ?>"><br>
                <label for="">Day End</label><br>
                <input type="date" name="date_end"   value="<?=$event['day_end'] ?>">
                <input type="hidden" name="id_event" value="<?=$event['id_event']?>">
                <br>
                <input type="submit" name="change" value="Change">
            </form>
            <br>

            <a href="index.php?ctrl=del_event&id=<?=$event['id_event']?>"><span class="del">Xóa</span></a>
            <a href="index.php?ctrl=event" class="btn"><strong>Trở Lại</strong></a>


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