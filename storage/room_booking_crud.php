<?php

function add_room_booking($mysqli,$booking_id,$extra_bed,$status)
{
    $sql = "INSERT INTO `room_booking` (`booking_id`,`extra_bed`,`status`) VALUE ('$booking_id','$extra_bed','$status')";
    return $mysqli->query($sql);
}
function get_room_booking($mysqli)
{
    $sql = "SELECT * FROM `room_booking`";
    return $mysqli->query($sql);
}

function get_room_booking_id($mysqli,$id)
{
    $sql = "SELECT * FROM `room_booking`WHERE `id`='$id'";
    $result = $mysqli->query($sql);
    return $result->fetch_assoc();
}

function delete_room_booking($mysqli,$id)
{
    $sql = "DELETE FROM `room_booking` WHERE `id`='$id'";
    return $mysqli->query($sql);
}

function update_room_booking($mysqli,$id,$booking_id,$extra_bed,$status)
{
    $sql = "UPDATE `room_booking` SET`booking_id`='$booking_id',`extra_bed`='$extra_bed',`status`='$status' WHERE `id`='$id'";
    return $mysqli->query($sql);
}


?>