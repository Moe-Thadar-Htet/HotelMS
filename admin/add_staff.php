<?php require_once("../layout/header.php")?>
<?php require_once("../layout/navbar.php")?>
<?php

$name= $name_err ="";
$age  = $age_err = "";
$gender = $genter_err ="";
$email= $email_err = "";
$phone = $phone_err = "";
$role = $role_err = "";

?>

<div class="room">
    <div class="card-form col-4 mt-3 p-3">
        <div class="card-title ">
            <h2 class="text-center" style="color: var(--nav-color);">Add Staff</h2>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group "> 
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?= $name ?>" placeholder="Customer Name">
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $name_err ?></div>
                </div>
                <div class="form-group "> 
                    <label for="age" class="form-label">Age</label>
                    <input type="number" name="age" class="form-control" id="age" value="<?= $age ?>">
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $age_err ?></div>
                </div>
              
                <div class="form-group ">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?=$email?>">
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $email_err?></div>
                </div>
                <div class="form-group ">
                    <label for="phone" class="form-label">Phone Number</label>
                    <input type="tel" name="phone" class="form-control" id="phone" value="<?=$phone?>">
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $phone_err?></div>
                </div> 
                <div class="form-group ">
                    <label for="gender">Gender</label>
                    <input type="radio" id="male" name="gender" value="0">
                    <label for="html">Male</label>
                    <input type="radio" id="female" name="gender" value="1">
                    <label for="html">Female</label>
                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $phone_err?></div> 

                </div>           
                <div>
                    <button class="btn col-2" type="submit" style="color:#fff;background-color:var(--nav-color);">Add</button> 
                </div>   
            </form>
        </div>
    </div>

    <div class="card-form col-7 mt-3 p-3">
        <h2 class="text-center" style="color: var(--nav-color);">Staff List</h2>
        <div class="card-body p-3">
           <div class="card">
                <div class="card-body">
                    <table class="table table-bordered  table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Staff Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                            
                            </tr>
                        </thead>
                        <tbody> 
                            <tr>
                                <td>Id</td>
                                <td>Room No</td>
                                <td>Room Type Id</td>
                                <td>Price</td>
                                <td>taken</td> 
                                <td></td>

                            </tr>
                            <tr>
                                <td>Id</td>
                                <td>Room No</td>
                                <td>Room Type Id</td>
                                <td>Price</td>
                                <td>taken</td>
                                <td></td> 

                            </tr>
                            <tr>
                                <td>Id</td>
                                <td>Room No</td>
                                <td>Room Type Id</td>
                                <td>Price</td>
                                <td>taken</td>
                                <td></td> 

                            </tr>
                            <tr>
                                <td>Id</td>
                                <td>Room No</td>
                                <td>Room Type Id</td>
                                <td>Price</td>
                                <td>taken</td>
                                <td></td>> 

                            </tr>
                            <tr>
                                <td>Id</td>
                                <td>Room No</td>
                                <td>Room Type Id</td>
                                <td>Price</td>
                                <td>taken</td> 

                                <tr>
                                <td>Id</td>
                                <td>Room No</td>
                                <td>Room Type Id</td>
                                <td>Price</td>
                                <td>taken</td> 

                            </tr>

                        </tbody>
                    </table>
                </div>
           </div> 
        </div>
    </div>
</div>

<?php require_once("../layout/footer.php")?>