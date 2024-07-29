<?php
function count_user()
{
    $sql = " SELECT count(*) as user  from user";
    return pdo_query_one($sql);
}
function count_course()
{
    $sql = " SELECT count(*) as course  from course";
    return pdo_query_one($sql);
}
function count_cmt()
{
    $sql = " SELECT count(*) as cmt  from comment";
    return pdo_query_one($sql);
}
function count_teacher()
{
    $sql = " SELECT count(*) as teacher from teacher";
    return pdo_query_one($sql);
}
function course_new()
{
    $sql = " SELECT * FROM course
        ORDER BY date DESC
        LIMIT 5;";
    return pdo_query($sql);
}
function user_rich()
{
    $sql = " SELECT * FROM user
        ORDER BY date DESC
        LIMIT 5;";
    return pdo_query($sql);
}
function vietnamdong($number)
{
    $number = intval($number);
    $format_number = number_format($number, 0, ',', '.');
    return $format_number . " VNĐ";
}
?>