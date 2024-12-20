<?php require_once("../layout/header.php")?>
<?php require_once("../layout/navbar.php")?>

<div class="card">
    <div class="card-body">
        <div class="card col-4">
            <div class="card-body">
            <form method="post">

            <div class="form-group my-3"> 
                <label for="student_name" class="form-label">Student Name</label>
                <input type="text" name="student_name" class="form-control" id="student_name" value="<?= $student_name ?>">
                <div class="text-danger" style="font-size:12px;"><?= $student_name_err ?></div>
            </div>
            <div class="form-group my-3">
                <label for="student_address" class="form-label">Student address</label>
                <input type="text" name="student_address" class="form-control" id="student_address" value="<?=$student_address?>">
                <div class="text-danger" style="font-size:12px;"><?= $student_address_err?></div>
            </div>
            <div class="row">
                <div class="form-group my-3 col-6">
                    <label for="student_age" class="form-label">Student Age</label>
                    <input type="number" name="student_age" class="form-control" id="student_age" value="<?=$student_age?>">
                    <div class="text-danger" style="font-size:12px;"><?= $student_age_err?></div>
                </div>
                <div class="form-group my-3 col-6">
                    <label for="student_batch" class="form-label">Student Class</label>
                    <select name="student_batch" class="form-select" id="student_batch">
                        <option value="" selected>Select Class</option>
                        <?php $class_list= get_all_class($mysqli)?>
                        <?php while($class = $class_list->fetch_assoc()){?>
                        <option value="<?php $class["class_id"] ?>" <?php if($class["class_id"] === $student_batch){
                            echo "selected";
                            }?>><?= $class["class_name"]?></option>
                        <?php } ?>
                    </select>
                </div> 
            </div>
            <div class="form-group my-3">
                <label for="student_email" class="form-label">Student Email</label>
                <input type="text" name="student_email" class="form-control" id="student_email" value="<?= $student_email ?>">
                <div class="text-danger" style="font-size:12px;"><?= $student_email_err?></div>
            </div>
           
            
            <button class="btn btn-primary" type="submit">Submit</button>
            
        </form>
            </div>
        </div>
            
    </div>
</div>
<?php require_once("../layout/footer.php")?>