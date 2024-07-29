<?php 
    function name_teacher($id){
        $sql ="SELECT name_teacher from teacher where id_teacher=$id";
        return pdo_query_value($sql);
    }
    function list_teacher(){
        $sql ="SELECT * from teacher ";
        return pdo_query($sql);
    }
    function list_teacher_5(){
        $sql = " SELECT * FROM teacher
        ORDER BY sort DESC
        LIMIT 5;";
    return pdo_query($sql);
    }
    function check_language_by_teacher($id){
        $sql ="SELECT * from teacher where id_teacher=$id";
        return pdo_query_one($sql);
    }
    function view_teacher($id){
        $sql ="SELECT * from teacher where id_teacher=$id";
        return pdo_query_one($sql);
    }
    function add_teacher($name,$type_language,$image_teacher){
        $sql ="INSERT INTO teacher (name_teacher,id_language,image_teacher) value (?,?,?)";
        pdo_execute($sql,$name,$type_language,$image_teacher);
    }
    function del_teacher($id){
        $sql ="DELETE from teacher where id_teacher=$id";
        pdo_execute($sql);
    }
    function check_teacher($id){
        $sql="SELECT * from course where id_teacher=$id";
        return pdo_query_exists($sql);
    }
?>