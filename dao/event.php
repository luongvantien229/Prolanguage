<?php
function list_event()
{
    $sql = "SELECT * from event";
    return pdo_query($sql);
}
function get_event($id)
{
    $sql = "SELECT * from event where id_event=$id";
    return pdo_query_one($sql);
}
function add_event($date_start, $date_end, $image)
{
    $sql = "INSERT INTO event(day_start,day_end,image_event) value(?,?,?)";
    pdo_execute($sql, $date_start, $date_end, $image);
}
function update_event($id, $date_start, $date_end)
{
    $sql = "UPDATE event set day_start=?,day_end=?  where id_event=$id";
    pdo_execute($sql, $date_start, $date_end);
}
function del_event($id)
{
    $sql = "DELETE from event where id_event=$id";
    pdo_execute($sql);
}
function event_today()
{
    $day = date('Y-m-d');
    $sql = "SELECT * from event where day_start <= '$day' and day_end >= '$day' limit 3";
    return pdo_query($sql);
}
?>