<?php require_once("../layout/header.php")?>
<?php require_once("../layout/navbar.php")?>
<?php
// $room_id = $room_id_err = "";
$booking_id = $booking_id_err = "";
$extra_bed  = $extra_bed_err  = "";
$status     = $status_err     = "";
$invalid    = true;


if(isset($_POST["booking_id"])){
    // $room_id = $_POST["room_id"];
    $booking_id = $_POST["booking_id"];
    $extra_bed  = $_POST["extra_bed"];
    $status     = $_POST["status"];

    // if($room_id === ""){
    //     $room_id_err = "Room ID does't blank!";
    //     $invalid     = false;
    // }
    if($booking_id === ""){
        $booking_id_err = "Booking ID does't blank!";
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
            $update = update_room_booking($mysqli,$editId,$booking_id,$extra_bed,$status);
            if($update){
                echo "<script>location.replace('./add_room_booking.php')</script>";
            }
        }else{
            $update = add_room_booking($mysqli,$booking_id,$extra_bed,0);
            if($update){
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
                    <input type="text" name="booking_id" class="form-control" id="booking_id" value="<?=$booking_id ?>">
                    <div class="text-danger" id="valid"><?= $booking_id_err ?></div>
                </div>
                <div class="form-group"> 
                    <label for="extra_bed" class="form-label">Extra Bed</label>
                    <input type="number" name="extra_bed" class="form-control" id="extra_bed" value="<?=$extra ?>"/>
                    <div class="text-danger" id="valid"><?= $extra_bed_err ?></div>
                </div>
                <div class="form-group"> 
                    <label for="status" class="form-label">Status</label>
                    <input type="text" name="status" class="form-control" id="status" value="<?=$status ?>"/>
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
        <h2 class="text-center" style="color: var(--nav-color);">Bed List</h2>
        <div class="card-body p-3">
           <div class="card">
                <div class="card-body">
                    <table class="table table-bordered  table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Booking ID</th>
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