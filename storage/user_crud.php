<?php 
function  add_user($mysqli,$user_name,$email,$password,$role)
{
    $sql = "INSERT INTO `user` (`user_name`,` email`,`password`,`role`) VALUE ('$user_name','$email','$password','$role')";
    return $mysqli->query($sql);
}
function get_user($mysqli)
{
    $sql = "SELECT * FROM `user`";
    return $mysqli->query($sql);
}

function get_user_id($mysqli,$id)
{
    $sql = "SELECT * FROM `user` WHERE `id` = $id";
    $result = $mysqli->query($sql);
    return $result->fetch_assoc();
}

function delete_user($mysqli,$id)
{
    $sql = "DELETE FROM `user` WHERE `id` = $id";
    return $mysqli->query($sql);
}

function update_user($mysqli,$id,$user_name,$email,$password,$role)
{
    $sql = "UPDATE `user` SET `user_name` = '$user_name', `email` = '$email', `password` = '$password', `role` = '$role' WHERE `id` = $id";
    return $mysqli->query($sql);
}

?>