<?php require_once("../layout/header.php")?>
<?php require_once("../layout/navbar.php")?>
<?php

$duty_id = $duty_id_err = "";
$staff_id = $staff_id_err ="";
$start_date = $start_date_err ="";
$end_date = $end_date_err = "";

?>

<div class="room">
    <div class="card-form col-4 mt-3 p-3">
        <div class="card-title ">
            <h2 class="text-center" style="color: var(--nav-color);">Add Room Type</h2>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group ">
                    <label for="duty_id" class="form-label">Select Duty</label>
                    <select name="duty_id" class="form-select" id="duty_id">
                    <option value="" selected>Select Duty</option>
                        
                    </select>
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $duty_id_err ?></div>
                </div>
                <div class="form-group ">
                    <label for="staff_id" class="form-label">Select Staff</label>
                    <select name="staff_id" class="form-select" id="staff_id">
                    <option value="" selected>Select Staff</option>
                        
                    </select>
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $staff_id_err ?></div>
                </div>
                <div class="form-group"> 
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" name="start_date" class="form-control" id="start_date" value="<?=$start_date ?>">
                    <div class="text-danger" id="valid"  style="font-size:12px;"><?= $start_date_err ?></div>
                </div>
                <div class="form-group"> 
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" name="end_date" class="form-control" id="end_date" value="<?=$end_date ?>">
                    <div class="text-danger" id="valid"  style="font-size:12px;"><?= $end_date_err ?></div>
                </div>
                <div>
                    <button class="btn col-2" type="submit" style="color:#fff;background-color:var(--nav-color);">Add</button> 
                </div>   
            </form>
        </div>
    </div>

    <div class="card-form col-7 mt-3 p-3">
        <h2 class="text-center" style="color: var(--nav-color);">Duty Staff Detail List</h2>
        <div class="card-body p-3">
           <div class="card">
                <div class="card-body">
                    <table class="table table-bordered  table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Duty Name</th>
                                <th>Staff Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                            
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                            <th>Id</th>
                                <th>Duty Name</th>
                                <th>Staff Name</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
           </div> 
        </div>
    </div>
</div>

<?php require_once("../layout/footer.php")?>