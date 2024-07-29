<?php
    function list_cmt(){
        $sql ="SELECT * from comment";
        return pdo_query($sql);
    }
    function cmt_by_course($id){
        $sql ="SELECT * from comment where id_course=? ";
        return pdo_query($sql,$id);
    }
    function add_cmt($id_user,$id_course,$content){
        $sql ="INSERT INTO comment(id_user,id_course,content,date) VALUES (?,?,?,?)";
        pdo_execute($sql,$id_user,$id_course,$content,date('Y-m-d'));
    }
    function count_cmt_by_user($id_user,$id_course){
        $sql="SELECT count(*) as cmt FROM comment where id_user=? and id_course=?";
        return pdo_query_one($sql,$id_user,$id_course);
    }
?>