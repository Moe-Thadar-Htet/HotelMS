<?php require_once("../layout/header.php")?>
<?php require_once("../layout/navbar.php")?>
<?php
$room_no = $room_no_err ="";
$room_type = $room_type_err = "";
$bed = $bed_err = "";
$price = $price_err ="";
$taken = $taken_err = "";
$invalid = true;
$validation_message="";

// $r = get_room_type($mysqli);
// var_dump($r);

if(isset($_GET["editId"])){
    $editId = $_GET["editId"];

    $edit_room          = get_room_id($mysqli,$editId);
    $room_no            = $edit_room['room_no'];    
    $selected_room_type = $edit_room['room_type'];  
    $bed                = $edit_room['bed'];    
    $price              = $edit_room['price'];   
    // var_dump($room_type); 
}


if(isset($_POST["room_no"])){
    $room_no   = $_POST["room_no"];
    $room_type = $_POST["room_type"];
    $bed       = $_POST["bed"];
    $price     = $_POST["price"];

     if($room_no ===  ""){
        $room_no_err =" Room Number can't be blanked!";
        $invalid     = false;
     }
     if($room_type ===  "" || $selected_room_type === ""){
        $room_type_err =" Room Type can't be blanked!";
        $invalid       = false;
     }
     if($bed ===  ""){
        $bed_err =" Bed can't be blanked!";
        $invalid = false;
     }
     if($price ===  ""){
        $price_err =" Price can't be blanked!";
        $invalid   = false;
     }


     if($invalid){
        if(isset($_GET["editId"])){
            $update = update_room($mysqli,$editId,$room_no,$room_type,$bed,$price,0);
            if($update){
                echo "<script>location.replace('./add_room.php')</script>";
            }
        }else{
            if(add_room($mysqli,$room_no,$room_type,$bed,$price,0)){
                if($room_type == ""){
                    echo "<script>location.replace('./add_room.php')</script>";
                }else{
                    $invalid = true;
                }      
            }
        }
    }
     }


?>

<div class="room">
    <div class="card-form col-4 mt-3 p-3">
        <div class="card-title ">
            <?php if (isset($_GET["editId"])){?>
                <h2 class="text-center" style="color: var(--nav-color);">Update Room</h2>
            <?php }else { ?>
                <h2 class="text-center" style="color: var(--nav-color);">Add Room</h2>
            <?php }?>
   
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group"> 
                    <label for="room_no" class="form-label">Room Number</label>
                    <input type="text" name="room_no" class="form-control" id="room_no" value="<?= $room_no ?>">
                    <div class="text-danger" id="valid"  style="font-size:12px;"><?= $room_no_err ?></div>
                </div>
                
                <div class="form-group">
                    <label for="room_type" class="form-label">Room Type</label>
                    <select name="room_type" class="form-select" id="room_type">
                    <option value="">Select Room Type</option> 
                        <?php $room_types= get_room_type($mysqli);
                        ?>
                        <?php while($room_type = $room_types->fetch_assoc()){  ?>
                        <option value="<?= $room_type["id"] ?>"
                        <?php if($room_type["id"] == $selected_room_type){
                            echo "selected";
                            }?>><?= $room_type["room_type_name"]?></option>
                        <?php } ?> 
                    </select>                                  
                    <div class="text-danger" id="valid"  style="font-size:12px;"><?= $room_type_err?></div>
                </div>
                <div class="form-group"> 
                    <label for="bed" class="form-label">Bed Name</label>
                    <input type="text" name="bed" class="form-control" id="bed" value="<?=$bed ?>">
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $bed_err ?></div>
                </div>
                <div class="form-group">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="price" value="<?=$price?>">
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $price_err?></div>
                </div>
                <!-- <div class="form-group">
                    <input type="checkbox" name="taken" id="taken" class="form-check-input"/>
                    <label for="taken"  class="form-label">Taken</label>
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $taken_err?></div>
                
                </div> -->
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
<?php if(isset($_GET['deleteId'])){
   if(delete_room($mysqli,$_GET["deleteId"])){
    echo "<script>location.replace('./add_room.php')</script>";
}
} ?>

    <div class="card-form col-7 mt-3 p-3">
        <h2 class="text-center" style="color: var(--nav-color);">Room List</h2>
        <div class="card-body p-3">
           <div class="card">
                <div class="card-body">
                    <table class="table table-bordered  table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Room No</th>
                                <th>Room Type Id</th>
                                <th>Bed Name</th>
                                <th>Price</th>
                                <th>Action</th>
                            
                            </tr>
                        </thead>
                        <tbody> 
                            <?php $rooms= get_room($mysqli);
                            $i =1;?>
                            <?php while($room= $rooms->fetch_assoc()){ ?>
                            <tr>
                                <td><?=$i ?></td>
                                <td><?=$room["room_no"] ?></td>
                                <td><?=$room["room_type"] ?></td>
                                <td><?=$room["bed"] ?></td>
                                <td><?=$room["price"] ?></td>
                                <td>
                                    <a href="?editId=<?=$room['id']?>" class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                    <button class="btn btn-sm btn-danger  deleteSelect" data-value="<?=$room['id']?>" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <?php $i++;}?>
                            

                        </tbody>
                    </table>
                </div>
           </div> 
        </div>
    </div>
</div>

<?php require_once("../layout/footer.php")?>