<style>
    .body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        background-color: #fff;
    }

    #lesson-list {
        flex-shrink: 0;
        width: 250px;
        height: 99.9vh;
        background: #e45b00;
        padding: 20px;
        box-sizing: border-box;
        color: #fff;
        overflow-y: auto;
        box-shadow: 5px 0px 15px rgba(0, 0, 0, 0.1);
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
        transition: width 0.3s ease;
    }

    #lesson-list a {
        color: #fff;
        text-decoration: none;
        display: block;
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        background-color: #ff6600;
        transition: background-color 0.3s ease-in;
    }

    #lesson-list a:hover {
        background-color: #fff;
        color: #ff6600;
    }

    #lesson-list h2 {
        margin-bottom: 20px;
        color: #fff;
    }

    ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    li {
        margin-bottom: 10px;
    }

    #lesson-iframe {
        /* flex-grow: 1; */
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-left: 10%;
        margin-top: 2%;
    }

    iframe {

        border: none;
        transform: scale(1);
        transition: transform 0.5s ease;
    }

    @media (max-width: 767px) {
        #lesson-list {
            width: 100%;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 15px;
        }

        #lesson-iframe {
            border-top-left-radius: 0;
            border-top-right-radius: 15px;
        }
    }
</style>

<div class="body">

    <div id="lesson-list">
        <a href="index.php?page=infor_course&id=<?= $chap['id_course'] ?>">Trở về</a>
        <h2>Danh sách bài học</h2>
        <ul>
            <?php
            foreach ($list_chap as $item) {
                extract($item);
                ?>
                <li><a href="index.php?page=view_chap&id=<?= $item['id_chap'] ?>">
                        <?= $item['name_chap'] ?>
                    </a></li>
                <?php
            }
            ?>


            <!-- Thêm các bài học khác nếu cần -->
        </ul>
    </div>

    <div id="lesson-iframe">
        <?php
        if ($chap['type_media'] === "youtube") {
            ?>
            <iframe width="900" height="600" src="<?= $chap['media'] ?>" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
            <?php
        } else if ($chap['type_media'] === "mp3") {
            ?>
                <audio controls autoplay style="background-color:#f0f0f0">
                    <source src="content/audio/<?= $chap['media'] ?>" type="audio/mp3">
                    
                </audio>
            <?php
        }
        ?>

    </div>

</div>