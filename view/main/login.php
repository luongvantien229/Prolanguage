<div class="cotn_principal">
    <div class="cont_centrar">

        <div class="cont_login">
            <div class="cont_info_log_sign_up">
                <div class="col_md_login">
                    <div class="cont_ba_opcitiy">
                        <h2>LOGIN</h2>
                        <p>If you have a acount.</p>
                        <button class="btn_login" onclick="change_to_login()">LOGIN</button>
                    </div>
                </div>
                <div class="col_md_sign_up">
                    <div class="cont_ba_opcitiy">
                        <h2>SIGN UP</h2>
                        <p>If you don't have a acount.</p>
                        <button class="btn_sign_up" onclick="change_to_sign_up()">SIGN UP</button>
                    </div>
                </div>
            </div>
            <div class="cont_back_info">
            </div>
            <div class="cont_forms">
                <div class="cont_form_login">
                    <a href="" onclick="hidden_login_and_sign_up()"><i class="fa fa-book-open mr-2"></i></a>
                    <h2>LOGIN</h2>
                    <form action="index.php?page=login-form" method="post">
                        <input type="text" name="user_name" placeholder="User name" minlength="6" maxlength="20" required/>
                        <input type="password" name="pass" placeholder="Password" minlength="6" maxlength="20" required/>
                        <button class="btn_login" type="submit" name="submit" onclick="change_to_login()">LOGIN</button>
                    </form>
                    <a href="index.php?page=forgot">Quên Mật Khẩu</a>
                </div>
                <div class="cont_form_sign_up">
                    <a href="" onclick="hidden_login_and_sign_up()"><i class="fa fa-book-open mr-2"></i></a>
                    <h2>SIGN UP</h2>
                    <form action="index.php?page=login-form" method="post">
                        <input type="text" name="user_name" id="user_name" placeholder="User" minlength="6" maxlength="20" required/>
                        <input type="password" name="pass" id="pass" placeholder="Password" minlength="6" maxlength="20" required/>
                        <input type="password" name="repass" placeholder="Confirm Password" minlength="6" maxlength="20" required/>
                        <button class="btn_sign_up" type="submit" name="add" onclick="change_to_sign_up()">SIGN UP</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

    * {
        margin: 0px auto;
        padding: 0px;
        text-align: center;
        font-family: "Open Sans", sans-serif;
    }
    a{
        text-decoration: none;
        color: black;
    }
    .cotn_principal {
        position: absolute;
        width: 100%;
        display: flex;
        height: 80%;
    }

    .cont_centrar {
        display: flex;
        align-self: center;
        width: 100%;
        transform: scale(1);
    }

    .cont_login {
        position: relative;
        width: 640px;
    }

    .cont_back_info {
        position: relative;
        float: left;
        width: 640px;
        height: 280px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 1px 10px 30px -10px rgba(0, 0, 0, 0.5);
    }

    .cont_forms {
        position: absolute;
        overflow: hidden;
        top: 0px;
        left: 0px;
        width: 320px;
        height: 280px;
        background-color: #eee;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
        -ms-transition: all 0.5s;
        -o-transition: all 0.5s;
        transition: all 0.5s;
    }

    .cont_forms_active_login {
        box-shadow: 1px 10px 30px -10px rgba(0, 0, 0, 0.5);
        height: 420px;
        top: -60px;
        left: 0px;
        transition: all 0.5s;
    }

    .cont_forms_active_sign_up {
        box-shadow: 1px 10px 30px -10px rgba(0, 0, 0, 0.5);
        height: 420px;
        top: -60px;
        left: 320px;
        transition: all 0.5s;
    }

    .cont_img_back_grey {
        position: absolute;
        width: 950px;
        top: -80px;
        left: -116px;
    }

    .cont_info_log_sign_up {
        position: absolute;
        width: 640px;
        height: 280px;
        top: 0px;
        z-index: 1;
    }

    .col_md_login {
        position: relative;
        float: left;
        width: 50%;
    }

    .col_md_login>h2 {
        font-weight: 400;
        margin-top: 70px;
        color: #757575;
    }

    .col_md_login>p {
        font-weight: 400;
        margin-top: 15px;
        width: 80%;
        color: #37474f;
    }

    .btn_login {
        background-color: #26c6da;
        border: none;
        padding: 10px;
        width: 200px;
        border-radius: 3px;
        box-shadow: 1px 5px 20px -5px rgba(0, 0, 0, 0.4);
        color: #fff;
        margin-top: 10px;
        cursor: pointer;
    }

    .col_md_sign_up {
        position: relative;
        float: left;
        width: 50%;
    }

    .cont_ba_opcitiy>h2 {
        font-weight: 400;
        color: #fff;
    }

    .cont_ba_opcitiy>p {
        font-weight: 400;
        margin-top: 15px;
        color: #fff;
    }

    /* ----------------------------------
background text    
------------------------------------
 */
    .cont_ba_opcitiy {
        position: relative;
        background-color: rgba(120, 144, 156, 0.55);
        width: 80%;
        border-radius: 3px;
        margin-top: 60px;
        padding: 15px 0px;
    }

    .btn_sign_up {
        background-color: #ef5350;
        border: none;
        padding: 10px;
        width: 200px;
        border-radius: 3px;
        box-shadow: 1px 5px 20px -5px rgba(0, 0, 0, 0.4);
        color: #fff;
        margin-top: 10px;
        cursor: pointer;
    }

    .cont_forms_active_sign_up {
        z-index: 2;
    }

    .cont_form_login {
        position: absolute;
        opacity: 0;
        display: none;
        width: 320px;
        transition: all 0.5s;
    }

    .cont_forms_active_login {
        z-index: 2;
    }

    .cont_form_sign_up {
        position: absolute;
        width: 320px;
        float: left;
        opacity: 0;
        display: none;

        transition: all 0.5s;
    }

    .cont_form_sign_up>form>input {
        text-align: left;
        padding: 15px 5px;
        margin-left: 10px;
        margin-top: 20px;
        width: 260px;
        border: none;
        color: #757575;
    }

    .cont_form_sign_up>h2 {
        margin-top: 50px;
        font-weight: 400;
        color: #757575;
    }

    .cont_form_login>form>input {
        padding: 15px 5px;
        margin-left: 10px;
        margin-top: 20px;
        width: 260px;
        border: none;
        text-align: left;
        color: #757575;
    }

    .cont_form_login>h2 {
        margin-top: 110px;
        font-weight: 400;
        color: #757575;
    }

    .cont_form_login>a,
    .cont_form_sign_up>a {
        color: #757575;
        position: relative;
        float: left;
        margin: 10px;
        margin-left: 30px;
    }
</style>
<script>
    /* ------------------------------------ Click on login and Sign Up to  changue and view the effect
---------------------------------------
*/

    const time_to_show_login = 400;
    const time_to_hidden_login = 200;

    function change_to_login() {
        document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";
        document.querySelector('.cont_form_login').style.display = "block";
        document.querySelector('.cont_form_sign_up').style.opacity = "0";

        setTimeout(function () { document.querySelector('.cont_form_login').style.opacity = "1"; }, time_to_show_login);

        setTimeout(function () {
            document.querySelector('.cont_form_sign_up').style.display = "none";
        }, time_to_hidden_login);
    }

    const time_to_show_sign_up = 100;
    const time_to_hidden_sign_up = 400;

    function change_to_sign_up(at) {
        document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
        document.querySelector('.cont_form_sign_up').style.display = "block";
        document.querySelector('.cont_form_login').style.opacity = "0";

        setTimeout(function () {
            document.querySelector('.cont_form_sign_up').style.opacity = "1";
        }, time_to_show_sign_up);

        setTimeout(function () {
            document.querySelector('.cont_form_login').style.display = "none";
        }, time_to_hidden_sign_up);


    }

    const time_to_hidden_all = 500;

    function hidden_login_and_sign_up() {

        document.querySelector('.cont_forms').className = "cont_forms";
        document.querySelector('.cont_form_sign_up').style.opacity = "0";
        document.querySelector('.cont_form_login').style.opacity = "0";

        setTimeout(function () {
            document.querySelector('.cont_form_sign_up').style.display = "none";
            document.querySelector('.cont_form_login').style.display = "none";
        }, time_to_hidden_all);

    }

</script>