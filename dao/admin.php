<?php
    function check_admin($username,$pass){
        $sql= "SELECT * from admin_web where user_name=? and pass=? and role=1 ";
        return pdo_query_exists($sql,$username,$pass);
    }
?>