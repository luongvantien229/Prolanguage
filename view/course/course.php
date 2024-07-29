
<!-- Courses Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Courses</h5>
            <h1><?=$title?></h1>
        </div>
        <div class="row">
            <?php
            
            foreach ($list_course as $item) {
                extract($item);
                ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="rounded overflow-hidden mb-2">
                        <img class="img-fluid" src="content/img/course/<?= $item['image'] ?>"
                            style="width:350px; height:230px;" alt="">
                        <div class="bg-secondary p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-users text-primary mr-2"></i>
                                    <?= $item['member'] ?> Students
                                </small>
                            </div>
                            <a class="h5" href="?page=infor_course&id=<?=$item['id_course']?>">
                                <?= $item['name_course'] ?>
                            </a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">

                                    <?php
                                    if ($item['price'] != 0) {
                                        ?>
                                        <h5 class="m-0">
                                            <?= vietnamdong($item['price']) ?>
                                        </h5>
                                        <?php
                                    } else {
                                        ?>
                                        <h5 class="m-0">FREE</h5>
                                        <?php
                                    }

                                    ?>
                                    <h5 class="m-0">
                                        <?php
                                        $name = name_teacher($item['id_teacher']);
                                        echo $name;
                                        ?>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- Courses End -->