
<style>
        .body_change_pass {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .change-password-container {
            min-width: 450px;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            padding: 15px;
        }

        .change-password-header {
            background-color: #ff6600;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-bottom: 2px solid #e05600;
        }

        .change-password-form {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            border-color: #ff6600;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background: linear-gradient(to right, #ff6600, #e05600);
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
        }

        .form-group button:hover {
            background: linear-gradient(to right, #e05600, #ff6600);
        }

        .back-to-login {
            text-align: center;
            margin-top: 10px;
        }

        .back-to-login a {
            text-decoration: none;
            color: #3498db;
            font-weight: bold;
        }

        .back-to-login a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="body_change_pass">
        <div class="change-password-container">
            <div class="change-password-header">
                <h2>Đổi Mật Khẩu</h2>
            </div>
            <div class="change-password-form">
                <form action="?page=change_pass" method="post">
                <div class="form-group">
                    <label for="current-password">Mật Khẩu Hiện Tại:</label>
                    <input type="password" id="current-password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="new-password">Mật Khẩu Mới:</label>
                    <input type="password" id="new-password" name="new-password" required minlength="6" > 
                </div>
                <div class="form-group">
                    <label for="confirm-password">Xác Nhận Mật Khẩu:</label>
                    <input type="password" id="confirm-password" name="confirm-password" required minlength="6">
                </div>
                <div class="form-group">
                    <button type="submit" name="change">Đổi Mật Khẩu</button>
                </div>
                <div class="back-to-login">
                    <a href="index.php">Quay lại trang chủ</a>
                </div>
                </form>
            </div>
        </div>
    </div>
