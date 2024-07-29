<?php 
    function name_language($id){
        $sql ="SELECT name_language from type_language where id_language=$id";
        return pdo_query_one($sql);
    }
    function get_language($id){
        $sql ="SELECT * from type_language where id_language=$id";
        return pdo_query_one($sql);
    }
    function list_language(){
        $sql ="SELECT * from type_language ";
        return pdo_query($sql);
    }
    function add_language($name,$image){
        $sql="INSERT INTO type_language (name_language,image) value (?,?)";
        pdo_execute($sql,$name,$image);
    }
    function update_language($id,$name){
        $sql = "UPDATE `type_language` SET `name_language`=(?) WHERE id_language=?";
        pdo_execute($sql,$name,$id);
    }
    function del_language($id){
        $sql = "DELETE from `type_language` WHERE id_language=?";
        pdo_execute($sql,$id);
    }
    function lock_language($id){
        $sql = "UPDATE `type_language` SET `active`=0 WHERE id_language=$id";
        pdo_execute($sql);
    }
    function unlock_language($id){
        $sql = "UPDATE `type_language` SET `active`=1 WHERE id_language=$id";
        pdo_execute($sql);
    }
    function list_language_pop(){
        $sql = " SELECT * FROM type_language
        LIMIT 8";
    return pdo_query($sql);
    }
    function count_course_by_language($id)
{
    $sql = " SELECT count(*) as course  from course where id_language=$id";
    return pdo_query_one($sql);
}
?>