<?php 
    function chap_by_course($id){
        $sql = "SELECT*from chapter WHERE id_course=?";
        return pdo_query($sql,$id);
    }
    function chap($id){
        $sql = "SELECT*from chapter WHERE id_chap=?";
        return pdo_query_one($sql,$id);
    }
    function update_chap($id,$name_chap,$media,$type_media){
        $sql = "UPDATE chapter SET name_chap=?, media=?, type_media=? WHERE id_chap=?";
        pdo_execute($sql,$name_chap,$media,$type_media,$id);
    }
    function add_chap($id,$name_chap,$media,$type_media){
        $sql = "INSERT INTO chapter SET name_chap=?, media=? ,type_media=?, id_course=?";
        pdo_execute($sql,$name_chap,$media,$type_media,$id);
    }
    function del_chap($id){
        $sql = "DELETE FROM chapter WHERE id_chap=? ";
        pdo_execute($sql,$id);
    }
?>