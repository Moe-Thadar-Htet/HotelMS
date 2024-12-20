<?php 
function  add_user($mysqli,$user_name,$email,$password,$phone_number,$role)
{
    $sql = "INSERT INTO `user` (`user_name`,`email`,`password`,`phone_number`,`role`) VALUE ('$user_name','$email','$password','$phone_number','$role')";
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

function get_user_with_email($mysqli,$email)
{
    $sql = "SELECT * FROM `user` WHERE `email` = '$email'";
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

function update_password($mysqli,$id,$password){
    $hashPassword = password_hash($password,PASSWORD_BCRYPT);
    $sql = "UPDATE `user` SET  `password` = '$hashPassword' WHERE `id` = $id";
    return $mysqli->query($sql);
}

?>