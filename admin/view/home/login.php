<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./content/css/index.css">
    <style>
        .error {
            border: 1px solid red;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="" method="post" onsubmit="return validateForm()">
            <div class="user-box">
                <input type="text" name="username" autocomplete="off" required id="username">
                <label>Username</label>
            </div>
            <div class="user-box">
                <input type="password" name="pass" required minlength="6" maxlength="16" id="pass">
                <label>Password</label>
            </div>
            <input type="submit" name="login" value="LOGIN">
        </form>
    </div>
</body>
<script>
    // Hàm kiểm tra validate
    function validateForm() {
        // Lấy giá trị của các trường input
        var usernameInput = document.getElementById("username");
        var passwordInput = document.getElementById("pass");

        // Lấy giá trị của các trường
        var username = usernameInput.value;
        var password = passwordInput.value;

        // Kiểm tra xem các trường có được nhập hay không
        if (username.trim() === '') {
            alert("Vui lòng nhập tên đăng nhập.");
            usernameInput.classList.add("error");
            return false;
        } else {
            usernameInput.classList.remove("error");
        }

        if (password.trim() === '') {
            alert("Vui lòng nhập mật khẩu.");
            passwordInput.classList.add("error");
            return false;
        } else {
            passwordInput.classList.remove("error");
        }

        // Các điều kiện kiểm tra khác có thể được thêm vào ở đây
        // Ví dụ: kiểm tra độ dài của password, các ký tự hợp lệ, v.v.

        // Nếu mọi thứ đều hợp lệ, cho phép form được submit
        return true;
    }
</script>

</html>