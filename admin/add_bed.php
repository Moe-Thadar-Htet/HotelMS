<?php require_once("../layout/header.php")?>
<?php require_once("../layout/navbar.php")?>
<?php

$bed = $bed_err = "";

?>

<div class="room">
    <div class="card-form col-4 mt-3 p-3">
        <div class="card-title ">
            <h2 class="text-center" style="color: var(--nav-color);">Add Bed</h2>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group"> 
                    <label for="bed" class="form-label">Bed Name</label>
                    <input type="text" name="bed" class="form-control" id="bed" value="<?=$bed ?>">
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $bed_err ?></div>
                </div>
                <div class="form-group"> 
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" name="description" class="form-control" id="description" value="<?=$bed ?>" placeholder="Enter Description"></textarea>
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $bed_err ?></div>
                </div>
                <div>
                    <button class="btn col-2" type="submit" style="color:#fff;background-color:var(--nav-color);">Add</button> 
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
                                <th>Bed Name</th>
                                <th>Description</th>
                            
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>Id</td>
                                <td>Bed Name</td>
                                <td>Description</td>
                           
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
           </div> 
        </div>
    </div>
</div>

<?php require_once("../layout/footer.php")?>