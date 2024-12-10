<?php 
function  add_room_type($mysqli,$room_type_name)
{
    $sql = "INSERT INTO `room_type` (`room_type_name`) VALUE ('$room_type_name')";
    return $mysqli->query($sql);
}
function get_room_type($mysqli)
{
    $sql = "SELECT * FROM `room_type`";
    return $mysqli->query($sql);
}

function get_room_type_id($mysqli,$id)
{
    $sql = "SELECT * FROM `room_type` WHERE `id` = $id";
    $result = $mysqli->query($sql);
    return $result->fetch_assoc();
}

function delete_room_type($mysqli,$id)
{
    $sql = "DELETE FROM `room_type` WHERE `id` = $id";
    return $mysqli->query($sql);
}

function update_room_type($mysqli,$id,$room_type_name)
{
    $sql = "UPDATE `room_type` SET `room_type_name` = '$room_type_name' WHERE `id` = $id";
    return $mysqli->query($sql);
}

?>