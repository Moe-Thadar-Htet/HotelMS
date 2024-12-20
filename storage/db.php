<?php

try{
    $mysqli = new mysqli("localhost","root", "");
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
    $sql = "CREATE TABLE IF NOT EXISTS `user`(`id` INT AUTO_INCREMENT,`user_name` VARCHAR(45) NOT NULL ,`email` VARCHAR(100) UNIQUE NOT NULL ,`password` VARCHAR(100) NOT NULL,`phone_number` VARCHAR(50) NOT NULL,`role` INT NOT NULL,PRIMARY KEY(`id`)) ";
    if(!$mysqli->query($sql)){
        return false;
    }
    $sql = "CREATE TABLE IF NOT EXISTS `bed`(`id` INT AUTO_INCREMENT,`bed_name` VARCHAR(45) NOT NULL,PRIMARY KEY(`id`))";
    if (!$mysqli->query($sql)) {
        return false;
    }
    $sql = "CREATE TABLE IF NOT EXISTS `room_type`(`id` INT AUTO_INCREMENT,`room_type_name` VARCHAR(45) NOT NULL, PRIMARY KEY(`id`))";
    if (!$mysqli->query($sql)) {
        return false;
    }
    $sql = "CREATE TABLE IF NOT EXISTS `room`(`id` INT AUTO_INCREMENT,`room_no` VARCHAR(45) NOT NULL,`room_type_id` INT NOT NULL,`price` INT NOT NULL,`taken` BOOLEAN NOT NULL,PRIMARY KEY(`id`),FOREIGN KEY (`room_type_id`) REFERENCES `room_type`(`id`))";
    if (!$mysqli->query($sql)) {
        return false;
    }
  
    $sql = "CREATE TABLE IF NOT EXISTS `room_bed` (`id` INT AUTO_INCREMENT,`room_id` INT NOT NULL,`bed_id` INT NOT NULL,`qty` INT NOT NULL ,PRIMARY KEY (`id`),FOREIGN KEY (`room_id`) REFERENCES `room`(`id`),FOREIGN KEY (`bed_id`) REFERENCES `bed`(`id`))";
    if (!$mysqli->query($sql)) {
        return false;
    }
    $sql = "CREATE TABLE IF NOT EXISTS `customer` (`id` INT AUTO_INCREMENT,`customer_name` VARCHAR(45) NOT NULL,`nrc` VARCHAR(45) NOT NULL,`phone_no` INT NOT NULL ,`email` VARCHAR(100) NOT NULL,PRIMARY KEY (`id`))";
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