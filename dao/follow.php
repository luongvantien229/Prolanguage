<?php 
    function check_fl($id_user,$id_course){
        $sql="SELECT * FROM follow where id_user=? AND id_course=?";
        return pdo_query_exists($sql,$id_user,$id_course);
    }
    function follow($id_user,$id_course){
        $sql ="INSERT INTO follow (id_user,id_course) VALUES(?,?)";
        pdo_execute($sql,$id_user,$id_course);
    }
?>