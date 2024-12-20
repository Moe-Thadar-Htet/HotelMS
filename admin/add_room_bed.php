<?php require_once("../layout/header.php")?>
<?php require_once("../layout/navbar.php")?>
<?php


$room_bed = $room_bed_err = "";
$room_id = $room_id_err = "";
$bed_id = $bed_id_err =""; 
$bed_qty = $bed_qty_err = "";


?>

<div class="room">
    <div class="card-form col-4 mt-3 p-3">
        <div class="card-title ">
            <h2 class="text-center" style="color: var(--nav-color);">Add Room Type</h2>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group"> 
                    <label for="room_bed" class="form-label">Room Bed Name</label>
                    <input type="text" name="room_bed" class="form-control" id="room_bed" value="<?=$room_bed ?>">
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $room_bed_err ?></div>
                </div>
                <div class="form-group ">
                    <label for="room_id" class="form-label">Select Room</label>
                    <select name="room_id" class="form-select" id="room_id">
                    <option value="" selected>Select Room</option>
                        
                    </select>
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $room_id_err ?></div>
                </div>
                <div class="form-group">
                    <label for="bed_id" class="form-label">Select Bed</label>
                    <select name="bed_id" class="form-select" id="bed_id">
                    <option value="" selected>Select Bed</option>
                        
                    </select>
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $bed_id_err ?></div>
                </div>
                <div class="form-group"> 
                    <label for="bed_qty" class="form-label">Bed Qty</label>
                    <input type="number" name="bed_qty" class="form-control" id="bed_qty" value="<?=$bed_qty ?>">
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $bed_qty_err ?></div>
                </div>
                <div>
                    <button class="btn col-2" type="submit" style="color:#fff;background-color:var(--nav-color);">Add</button> 
                </div>   
            </form>
        </div>
    </div>

    <div class="card-form col-7 mt-3 p-3">
        <h2 class="text-center" style="color: var(--nav-color);">Room Bed Detail List</h2>
        <div class="card-body p-3">
           <div class="card">
                <div class="card-body">
                    <table class="table table-bordered  table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Room Bed Name</th>
                                <th>Room Name</th>
                                <th>Bed Name </th>
                                <th>Bed_Qty</th>
                            
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>Id</td>
                                <td>Room Type Name</td>
                                <td>Room Name</td>
                                <td>BedName </td>
                                <td>Bed_Qty</td>
                           
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
           </div> 
        </div>
    </div>
</div>

<?php require_once("../layout/footer.php")?>