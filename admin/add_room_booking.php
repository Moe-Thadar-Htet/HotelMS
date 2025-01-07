<?php require_once("../layout/header.php")?>
<?php require_once("../layout/navbar.php")?>
<?php

$booking_id = $booking_id_err = "";
$extra_bed  = $extra_bed_err  = "";
$checkout_time = $checkout_time_err = "";
$status     = $status_err     = "";
$invalid    = true;


if(isset($_GET["editId"])){
  $editId = $_GET["editId"];
  $room_booking =  get_room_booking_id($mysqli,$editId);
  var_dump( $room_booking);
  $booking_id = $room_booking["booking_id"];
  $checkout_time = $room_booking["checkout_time"];
  $extra_bed = $room_booking["extra_bed"];
  $status =$room_booking["status"];
}

if(isset($_GET['deleteId'])){
    if(delete_room_booking($mysqli,$_GET['deleteId']));
    echo"<script>location.replace('./add_room_booking.php')</script>";
}


if(isset($_POST["booking_id"])){
    $booking_id = $_POST["booking_id"];
    $checkout_time = $_POST["checkout_time"];
    $extra_bed  = $_POST["extra_bed"];
    $status     = $_POST["status"];


    if($booking_id === ""){
        $booking_id_err = "Booking ID does't blank!";
        $invalid     = false;
    }

    if($checkout_time  === ""){
        $checkout_time_err = "Checkout Time does't blank!";
        $invalid     = false;
    }

    if($extra_bed  === ""){
        $extra_bed_err = "Extra Bed does't blank!";
        $invalid     = false;
    }

    if($status === ""){
        $status_err = "Status does't blank!";
        $invalid     = false;
    }

    if($invalid){
        if(isset($_GET["editId"])){
            $update = update_room_booking($mysqli,$editId,$booking_id,$checkout_time,$extra_bed,$status);
            if($update){
                echo "<script>location.replace('./add_room_booking.php')</script>";
            }
        }else{
            $add = add_room_booking($mysqli,$booking_id,$checkout_time,$extra_bed,0);
            if($add){
                echo "<script>location.replace('./add_room_booking.php')</script>";
            }

        }
    }
}?>

<div class="room">
    <div class="card-form col-4 mt-3 p-3">
        <div class="card-title ">
            <?php if (isset($_GET["editId"])){?>
                <h2 class="text-center" style="color: var(--nav-color);">Update Room Booking</h2>
            <?php }else { ?>
                <h2 class="text-center" style="color: var(--nav-color);">Add Room Booking</h2>
            <?php }?>
            
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group"> 
                    <label for="booking_id" class="form-label">Booking ID</label>
                    <select name="booking_id" class="form-select" id="booking_id">
                    <option value="">Select Booking</option> 
                        <?php $bookings= get_booking($mysqli);
                        ?>
                        <?php while($booking = $bookings->fetch_assoc()){  ?>
                        <option value="<?= $booking["id"] ?>"
                        <?php 
                        if(isset($_GET["editId"])){
                            if($booking["id"] == $booking_id){
                                echo "selected";
                                }
                        }    
                        ?>>
                        <?= $booking["id"]?>
                        </option>
                        <?php } ?> 
                    </select>    
                    <div class="text-danger" id="valid"><?= $booking_id_err ?></div>
                </div>
                <div class="form-group"> 
                    <label for="checkout_time" class="form-label">Checkout Time</label>
                    <input type="datetime-local" name="checkout_time" class="form-control" id="checkout_time" value="<?=$checkout_time ?>">
                    <div class="text-danger" id="valid"><?= $checkout_time_err ?></div>
                </div>

                <div class="form-group"> 
                    <label for="extra_bed" class="form-label">Extra Bed</label>
                    <input type="number" name="extra_bed" class="form-control" id="extra_bed" value="<?=$extra ?>"/>
                    <div class="text-danger" id="valid"><?= $extra_bed_err ?></div>
                </div>
                <div class="form-group"> 
                    <label for="status" class="form-label">Status</label>
                    <input type="text" name="status" class="form-control" id="status" value="<?= $status?>"/>
                    <div class="text-danger" id="valid"><?= $status_err ?></div>
                </div>
                <div>
                    <?php if(isset($_GET['editId'])){?>
                        <button class="btn col-2" type="submit" style="color:#fff;background-color:var(--nav-color);">Update</button> 
                    <?php } else {?>
                        <button class="btn col-2" type="submit" style="color:#fff;background-color:var(--nav-color);">Add</button> 
                    <?php }?>
                </div>   
            </form>
        </div>
    </div>

    <div class="card-form col-7 mt-3 p-3">
    <div class="d-flex p-3">
            <h2 class="" style="color: var(--nav-color);">Room Booking List</h2>
            <a href="./index.php" class="btn btn-outline-success btn-sm ms-auto">Home</a>
        </div> 
        <div class="card-body p-3">
           <div class="card">
                <div class="card-body">
                    <table class="table table-bordered  table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Booking ID</th>
                                <th>Checkout Time</th>
                                <th>Extra Bed</th>
                                <th>Status</th>
                                <th>Action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php $room_bookings = get_room_booking($mysqli);
                            $i = 1 ;?>
                            <?php while ($room_booking = $room_bookings->fetch_assoc()){?>
                            <tr>
                                <td><?= $i?></td>
                                <td><?= $room_booking["booking_id"]?></td>
                                <td><?= $room_booking["checkout_time"]?></td>
                                <td><?= $room_booking["extra_bed"]?></td>
                                <td><?= $room_booking["status"]?></td>
                                <td>
                                    <a href="?editId=<?=$room_booking['id']?>" class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                    <button class="btn btn-sm btn-danger  deleteSelect" data-value="<?=$room_booking['id']?>" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa fa-trash"></i></button>
                                </td>
                              
                           
                            </tr>
                            <?php $i++; }?>
                           
                        </tbody>
                    </table>
                </div>
           </div> 
        </div>
    </div>
</div>

<?php require_once("../layout/footer.php")?>