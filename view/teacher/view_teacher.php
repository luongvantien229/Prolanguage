<style>
    .body_teacher {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
        display: flex;

    }

    .teacher-section,
    .courses-section {
        max-width: 600px;
        margin: 50px auto;
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        opacity: 0;
        /* Ban đầu ẩn đi */
        transform: translateY(20px);
        /* Di chuyển xuống 20px */
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .teacher-section.show,
    .courses-section.show {

        opacity: 1;
        /* Hiển thị khi có class show */
        transform: translateY(0);
        /* Di chuyển về vị trí ban đầu */
    }

    .teacher-details {
        display: flex;
        justify-content: center;
    }

    .teacher-image {
        width: 300px;
        height: auto;

        border-bottom: 1px solid #ddd;
    }

    .teacher-info,
    .courses-section {
        padding: 20px;
    }

    .teacher-name {
        font-size: 24px;
        margin: 0;
        color: #333;
    }

    .teacher-subject,
    .course-title {
        font-size: 16px;
        color: #666;
    }

    .teacher-description,
    .course-description {
        font-size: 14px;
        color: #555;
        margin-top: 10px;
    }

    .teacher-contact {
        font-size: 14px;
        color: #3498db;
        margin-top: 10px;
    }

    .section-title {
        font-size: 20px;
        color: #333;
        margin-bottom: 15px;
    }

    .course {
        margin-bottom: 20px;
        width: 350px;
        padding: 5px;
    }

    /* Hiệu ứng fade-in khi có class show */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media only screen and (max-width: 768px) {
        .body_teacher {
            flex-direction: column;
            align-items: center;
        }

        .teacher-section,
        .courses-section {
            max-width: 100%;
            margin: 20px;
        }

        .teacher-details {
            flex-direction: column;
            align-items: center;
        }

        .teacher-image {
            width: 100%;
        }
    }

    /* ... (Phần CSS trước đó) */

    .teacher-section:hover,
    .courses-section:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    .teacher-details:hover {
        filter: grayscale(50%);
        transition: filter 0.3s ease;
    }

    .course:hover {
        background-color: #bcbcbc;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    /* ... (Phần CSS sau đó) */
</style>


<div class="body_teacher">
    <section class="teacher-section">
        <div class="teacher-details">
            <img src="content/img/teacher/<?= $teacher['image_teacher'] ?>" alt="Teacher Image" class="teacher-image">
            <div class="teacher-info">
                <h1 class="teacher-name">
                    <?= $teacher['name_teacher'] ?>
                </h1>
                <p class="teacher-subject">Môn:
                    <?= name_language($teacher['id_language'])['name_language'] ?>
                </p>
                <p class="teacher-description">Giáo viên
                    <?= name_language($teacher['id_language'])['name_language'] ?> với hơn
                    <?= rand(5, 10) ?> năm kinh nghiệm. Nhiệt tình và tận tâm
                    với
                    việc giảng dạy, luôn tạo điều kiện thuận lợi cho học sinh hiểu bài.
                </p>
                <p class="teacher-contact">Liên hệ:
                    <?= $email = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $teacher['name_teacher']))) ?>@example.com
                </p>
            </div>
        </div>
    </section>

    <section class="courses-section">
        <h2 class="section-title">Các khóa học hot</h2>

        <?php
        foreach ($courses as $course) {
            extract($course);
            ?>
            <div class="course">
                <h3 class="course-title">
                    <a href="?page=infor_course&id=<?=$course['id_course']?>">
                        <?= $course['name_course'] ?>
                    </a>
                </h3>
                <p class="course-description"><i class="fa fa-users text-primary mr-2"></i>
                    <?= $course['member'] ?> Students
                </p>
            </div>
            <?php
        }
        ?>

        <!-- Thêm các khóa học khác tương tự -->
    </section>
</div>

<script>
    // Thêm class show để kích hoạt hiệu ứng fade-in
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector(".teacher-section").classList.add("show");
        document.querySelector(".courses-section").classList.add("show");
    });
</script>