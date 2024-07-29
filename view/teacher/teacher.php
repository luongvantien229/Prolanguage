<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Teachers</h5>
            <h1>Meet Our Teachers</h1>
        </div>
        <div class="row">
            <?php
            foreach ($teachers as $teacher) {
                extract($teacher);
                ?>
                <div class="col-md-6 col-lg-3 text-center team mb-4">
                    <div class="team-item rounded overflow-hidden mb-2">
                        <div class="team-img position-relative">
                            <img class="img-fluid" src="content/img/teacher/<?= $teacher['image_teacher'] ?>" alt=""
                                style="width: 255px; height: 375px;">
                            <div class="team-social">
                                <a class="btn btn-outline-light  mx-1"
                                    href="?page=view_teacher&id=<?= $teacher['id_teacher'] ?>">Xem thêm</a>
                            </div>
                        </div>
                        <div class="bg-secondary p-4">
                            <h5>
                                <? $teacehr['name_teacher'] ?>
                            </h5>
                            <p class="m-0">
                                <?= name_language($teacher['id_language'])['name_language'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>