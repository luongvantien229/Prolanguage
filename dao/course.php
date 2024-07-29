<?php
function list_course()
{
    $sql = "SELECT * from course";
    return pdo_query($sql);
}
function list_course_by_id($id)
{
    $sql = "SELECT * from course where id_language = $id";
    return pdo_query($sql);
}
function list_course_by_teacher($id)
{
    $sql = "SELECT * from course  where id_teacher = ? ORDER BY member DESC limit 5";
    return pdo_query($sql,$id);
}
function check_list_course_by_id($id)
{
    $sql = "SELECT * from course where id_language = $id";
    return pdo_query_exists($sql);
}
function view_course($id)
{
    $sql = "SELECT * from course where id_course=$id";
    return pdo_query_one($sql);
}
function name_course($id)
{
    $sql = "SELECT name_course from course where id_course=$id";
    return pdo_query_one($sql);
}
function change_price($id, $price)
{
    $sql = "UPDATE course Set price=$price WHERE id_course=$id";
    pdo_execute($sql);
}
function lock_course($id)
{
    $sql = "UPDATE `course` SET `active`=0 WHERE id_course=$id";
    pdo_execute($sql);
}
function unlock_course($id)
{
    $sql = "UPDATE `course` SET `active`=1 WHERE id_course=$id";
    pdo_execute($sql);
}
function add_course($name_course, $image, $price, $date, $teacher, $type_language)
{
    $sql = "INSERT INTO course (name_course,image,price,date,id_teacher,id_language) value (?,?,?,?,?,?)";
    pdo_execute($sql, $name_course, $image, $price, $date, $teacher, $type_language);
}
function del_course($id)
{
    $sql = "DELETE from course where id_course=$id";
    pdo_execute($sql);
}
function list_pop_course()
{
    $sql = " SELECT * FROM course
        ORDER BY member DESC
        LIMIT 6;";
    return pdo_query($sql);
}
function list_free_course(){
    $sql = " SELECT * FROM course
        where price = 0
        LIMIT 6;";
    return pdo_query($sql);
}
    function buy_course($id_user,$monney){
        $sql="UPDATE user SET monney = monney - ? WHERE id_user =?";
        pdo_execute($sql,$monney,$id_user);
    }
    function up_date_member($id){
        $sql="UPDATE course SET member=member+1 WHERE id_course =?";
        pdo_execute($sql,$id);
    }
?>