<?php 
function  add_room($mysqli,$room_no,$room_type,$bed,$price,$taken)
{
    $sql = "INSERT INTO `room` (`room_no`,`room_type`,`bed`,`price`,`taken`) VALUE ('$room_no','$room_type','$bed','$price',0)";
    return $mysqli->query($sql);
}
function get_room($mysqli)
{
    $sql = "SELECT * FROM `room`";
    return $mysqli->query($sql);
}

function get_room_join($mysqli)
{
    $sql= "SELECT r.*,rt.`room_type_name` FROM `room` r INNER JOIN `room_type` rt ON r.room_type= rt.id ";
    return $mysqli->query($sql);

}

function get_room_id($mysqli,$id)
{
    $sql = "SELECT * FROM `room` WHERE `id` = $id";
    $result = $mysqli->query($sql);
    return $result->fetch_assoc();
}

function delete_room($mysqli,$id)
{
    $sql = "DELETE FROM `room` WHERE `id` = $id";
    return $mysqli->query($sql);
}

function update_room($mysqli,$id,$room_no,$room_type,$bed,$price,$taken)
{
    $sql = "UPDATE `room` SET `room_no` = '$room_no', `room_type` = '$room_type',`bed`='$bed', `price` = '$price', `taken` = '$taken' WHERE `id` = $id";
    return $mysqli->query($sql);
}

?>