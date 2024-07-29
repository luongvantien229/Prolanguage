
<style>
        

        .profile-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.357);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .profile-details {
            padding: 20px;
            text-align: center;
        }

        .profile-details img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 4px solid #ff6600;
            margin-bottom: 15px;
        }

        .user {
            display: grid;
            row-gap: 20px;
            
        }

        .user input {
            width: 80%;
            height: 35px;
            border-radius: 15px;
            border: 0;
            background-color: #f0f0f0;
            margin: auto;
            padding-left: 15px;
            padding-right: 15px;

        }

        .user input[type="file"] {
            width: 0;
            height: 0;
            overflow: hidden;
            position: absolute;
        }

        .user label {
            margin: auto;
            padding: 10px;
            background:  #ff6600;
            color: #fff;
            cursor: pointer;
            border-radius: 5px;
            width: 150px;
        }

        .user a {
            color: #3498db;
            text-decoration: none;
            font-size: 14px;
            display: block;
            margin-top: 10px;
            position: absolute;
            left: 15px;
            bottom: 15px;
        }

        .user a:hover {
            text-decoration: underline;
        }

        .user input[type="submit"] {
            width: 80px;
            background: linear-gradient(to right, #ff6600, #ffaf7a);
            color: #fff;
            padding-left: 0;
            padding-right: 0;
            font-size: 1rem;
        }
    </style>

    <div class="profile-container">
        <div class="profile-details">
            <img src="content/img/user/<?=$user['image']?>" alt="Avatar">
            <h2>User Name</h2>
            <form action="?page=update_user" method="post" class="user" enctype="multipart/form-data">
                <input type="file" id="file" name="image" accept="image/*">
                <label for="file">Image For Avatar</label>
                <input type="text" name="name_user" value="<?=$user['name_user']?>" autocomplete="off">
                <input type="text" value="<?=$user['user_name']?>" disabled>
                <input type="email" name="email" value="<?=$user['email']?>" autocomplete="off">
                <input type="text" value="Số Dư Hiện Tại: <?=vietnamdong($user['monney'])?>" disabled>
                <input type="text" value="Join On: <?=$user['date']?>" disabled>
                <input type="hidden" name="id_user" value="<?=$user['id_user']?>">
                <a href="?page=change_pass&id=<?=$user['id_user']?>">Quên mật khẩu?</a>
                <input type="submit" name="change" value="Change">
            </form>
        </div>
    </div>

