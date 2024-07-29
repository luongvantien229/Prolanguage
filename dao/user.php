<?php 
    function list_user(){
        $sql ="SELECT * from user";
        return pdo_query($sql);
    }
    function name_user($id){
        $sql ="SELECT name_user from user where id_user=$id";
        return pdo_query_value($sql);
    }
    function img_user($id){
        $sql ="SELECT image from user where id_user=$id";
        return pdo_query_value($sql);
    }
    function lock($id){
        $sql = "UPDATE `user` SET `active`=0 WHERE id_user=$id";
        pdo_execute($sql);
    }
    function unlock($id){
        $sql = "UPDATE `user` SET `active`=1 WHERE id_user=$id";
        pdo_execute($sql);
    }
    function get_user($user_name){
        $sql ="SELECT * from user where user_name= ? ";
        return pdo_query_one($sql,$user_name);
    }
    function get_user_by_id($id){
        $sql ="SELECT * from user where id_user= ? ";
        return pdo_query_one($sql,$id);
    }
    function login($user_name,$pass){
        $sql ="SELECT * from user where user_name=? and pass= ? ";
        return pdo_query_exists($sql,$user_name,$pass);
    }
    function check_active($user_name,$pass){
        $sql ="SELECT * from user where user_name=? and pass= ? and active = 1";
        return pdo_query_exists($sql,$user_name,$pass);
    }
    function check_user_name($user_name){
        $sql ="SELECT * from user where user_name=? ";
        return pdo_query_exists($sql,$user_name);
    }
    function add_user($user_name,$pass){
        $sql ="INSERT INTO user (user_name,pass,name_user,date) VALUES (?, ?,?,?)";
        pdo_execute($sql,$user_name,$pass,$user_name,date('Y-m-d'));
    }
    function change_user($name_user,$email,$image,$id){
        if($image==''){
            $sql ="UPDATE user SET name_user=? ,email=?  WHERE id_user=? ";
            pdo_execute($sql,$name_user,$email,$id);

        }
        else{
            $sql ="UPDATE user SET name_user=? ,email=? ,image=? WHERE id_user=? ";
            pdo_execute($sql,$name_user,$email,$image,$id);
        }
        
    }
    function change_pass($pass,$id_user){
        $sql ="UPDATE user SET pass=?  WHERE id_user=? ";
        pdo_execute($sql,$pass,$id_user);
    }
    function get_user_by_email($email){
        $sql ="SELECT * from user where email= ? ";
        return pdo_query_one($sql,$email);
    }
?>