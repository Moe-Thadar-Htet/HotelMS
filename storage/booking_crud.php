<?php 

function add_booking($mysqli,$room_id,$checkin_date,$checkout_date,$email,$name,$phonenumber)
{
    $sql = "SELECT * FROM `customer` WHERE `email`='$email'";
    $customerResult = $mysqli->query($sql);
    $customer = $customerResult->fetch_assoc();
    if($customer){
        $sql = "UPDATE `customer` SET `customer_name`='$name' , `phone_no`='$phonenumber' WHERE `id`=$customer[id]";
        if($mysqli->query($sql)){
            $sql = "INSERT INTO `booking` (`room_id`,`checkin_date`,`checkout_date`,`customer_id`) VALUE ($room_id,'$checkin_date','$checkout_date',$customer[id])";
            $mysqli->query( $sql);
            $sql = "UPDATE `room` SET `taken`=2 where `id`=$room_id";
            $mysqli->query($sql);
            return true;
        }
    }else{
        return false;
    }
}
function get_booking($mysqli)
{
    $sql = "SELECT * FROM `booking`";
    return $mysqli->query( $sql);
}
function get_booking_id($mysqli,$id)
{
    $sql = "SELECT * FROM `booking` WHERE `id`='$id'";
    $result = $mysqli->query( $sql);
    return $result->fetch_assoc();
}
function delete_booking($mysqli,$id)
{
    $sql = "DELETE FROM `booking` WHERE `id` = $id";
    return $mysqli->query($sql);
}
function update_booking($mysqli,$id,$room_id,$checkin_date,$checkout_date,$customer_id)
{
    $sql = "UPDATE `booking` SET `room_id`='$room_id',`checkin_date`='$checkin_date',`checkout_date`='$checkout_date',`customer_id`='$customer_id' WHERE `id` = $id";
    return $mysqli->query($sql);
}






?>