<?php

try{
    $mysqli = new mysqli("127.0.0.10","root", "");
    $sql = "CREATE DATABASE IF NOT EXISTS `HMS`";
    if($mysqli->query($sql)){
        if($mysqli-> select_db("HMS")){
            create_tables($mysqli);
            // seeding($mysqli);
        }
    }

}catch(\throwable $th){
    echo "Cannot connect the database!";
    die();
}
function create_tables($mysqli)
{
    $sql = "CREATE TABLE IF NOT EXISTS `user`(`id` INT AUTO_INCREMENT,`user_name` VARCHAR(45) NOT NULL ,`email` VARCHAR(100) UNIQUE NOT NULL ,`password` VARCHAR(100) NOT NULL,`role` INT NOT NULL,PRIMARY KEY(`id`)) ";
    if(!$mysqli->query($sql)){
        return false;
    }
    // $sql = "CREATE TABLE IF NOT EXISTS `bed`(`id` INT AUTO_INCREMENT,`bed_name` VARCHAR(45) NOT NULL,`description` VARCHAR(100) NOT NULL,PRIMARY KEY(`id`))";
    // if (!$mysqli->query($sql)) {
    //     return false;
    // }
    $sql = "CREATE TABLE IF NOT EXISTS `room_type`(`id` INT AUTO_INCREMENT,`room_type_name` VARCHAR(45) NOT NULL,`description` VARCHAR(100) NOT NULL, PRIMARY KEY(`id`))";
    if (!$mysqli->query($sql)) {
        return false;
    }
    $sql = "CREATE TABLE IF NOT EXISTS `room`(`id` INT AUTO_INCREMENT,`room_no` VARCHAR(45) NOT NULL,`room_type` INT NOT NULL,`bed` VARCHAR(45) NOT NULL ,`price` INT NOT NULL,`taken` BOOLEAN NOT NULL,PRIMARY KEY(`id`),FOREIGN KEY (`room_type`) REFERENCES `room_type`(`id`))";
    if (!$mysqli->query($sql)) {
        return false;
    }
  
    // $sql = "CREATE TABLE IF NOT EXISTS `room_bed` (`id` INT AUTO_INCREMENT,`room_bed_name` VARCHAR(45) NOT NULL,`room_id` INT NOT NULL,`bed_id` INT NOT NULL,`bed_         qty` INT NOT NULL ,PRIMARY KEY (`id`),FOREIGN KEY (`room_id`) REFERENCES `room`(`id`),FOREIGN KEY (`bed_id`) REFERENCES `bed`(`id`))";
    // if (!$mysqli->query($sql)) {
    //     return false;
    // }
    $sql = "CREATE TABLE IF NOT EXISTS `customer` (`id` INT AUTO_INCREMENT,`customer_name` VARCHAR(45) NOT NULL,`nrc` VARCHAR(45) NOT NULL,`phone_no` INT NOT NULL ,`email` VARCHAR(100) NOT NULL,PRIMARY KEY (`id`))";
    if (!$mysqli->query($sql)) {
        return false;
    }
    $sql = "CREATE TABLE IF NOT EXISTS `staff` (`id` INT AUTO_INCREMENT,`staff_name` VARCHAR(45) NOT NULL,`age` INT NOT NULL,`phone_no` INT NOT NULL ,`email` VARCHAR(100) NOT NULL,`gender` INT NOT NULL,`role` VARCHAR(45) NOT NULL ,PRIMARY KEY (`id`))";
    if (!$mysqli->query($sql)) {
        return false;
    }
    $sql = "CREATE TABLE IF NOT EXISTS `duty` (`id` INT AUTO_INCREMENT,`duty_name` VARCHAR(45) NOT NULL,`start_time` DATETIME NOT NULL,`end_time` DATETIME NOT NULL,PRIMARY KEY (`id`))";
    if (!$mysqli->query($sql)) {
        return false;
    }
    $sql = "CREATE TABLE IF NOT EXISTS `duty_staff` (`id` INT AUTO_INCREMENT,`duty_id` INT NOT NULL,`staff_id` INT NOT NULL,`start_date` DATE NOT NULL,`end_date` DATE NOT NULL,PRIMARY KEY (`id`),FOREIGN KEY (`duty_id`) REFERENCES `duty`(`id`),FOREIGN KEY (`staff_id`) REFERENCES `staff`(`id`))";
    if (!$mysqli->query($sql)) {
        return false;
    }



    
    return true;
}

// function seeding($mysqli)
// {
//     $sql ="INSERT INTO `user`(`username`,`email`,`password`,`role`,`profile`) VALUE ('admin','admin@gmail.com','password',1,'profile')";
//      return $mysqli->query($sql);
// }






?>