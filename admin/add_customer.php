<?php require_once("../layout/header.php")?>
<?php require_once("../layout/navbar.php")?>
<?php

$customer_name= $customer_name_err ="";
$nrc = $nrc_err = "";
$phone_no= $phone_no_err ="";
$email= $email_err = "";
$invalid= true;

if(isset($_GET["editId"])){
    $editId = $_GET["editId"];
    $customer = get_room_id($mysqli,$editId);
    $customer_name   = $_GET["customer_name"];
    $nrc    = $_GET["nrc"];
    $phone_no = $_GET["phone_no"];
    $email    = $_GET["email"];

}

if(isset($_POST["customer_name"])){
    $customer_name   = $_POST["customer_name"];
    $nrc    = $_POST["nrc"];
    $phone_no = $_POST["phone_no"];
    $email    = $_POST["email"];

     if($customer_name === ""){
        $customer_name_err = "Customer Name can't be blanked!";
        $invalid     = false;
     }
     if($nrc === ""){
        $nrc_err = "NRC can't be blanked!";
        $invalid = false;
     }
     if($phone_no === ""){
        $phone_no_err = "Phone Number can't be blanked!";
        $invalid = false;
     }
     if($email === ""){
        $email_err =" Email can't be blanked!";
        $invalid   = false;
     }


     if($invalid){
        if(isset($_GET["editId"])){
            $update =update_customer($mysqli,$$editId,$customer_name,$nrc,$phone_no,$email);
            if($update){
                echo "<script>location.replace('./add_customer.php')</script>";
            }
        }else{
            if(add_customer($mysqli,$customer_name,$nrc,$phone_no,$email)){
                echo "<script>location.replace('./add_customer.php')</script>";
            }else{
                    $invalid = true;
            }      
            
        }
    }
 }
?>

<div class="room">
    <div class="card-form col-4 mt-3 p-3">
        <div class="card-title ">
            <?php if (isset($_GET["editId"])){?>
                <h2 class="text-center" style="color: var(--nav-color);">Update Customer</h2>
            <?php }else { ?>
                <h2 class="text-center" style="color: var(--nav-color);">Add Customer</h2>
            <?php }?>
        </div>
        <div class="card-body">
            <form method="post">
                <div class="form-group"> 
                    <label for="customer_name" class="form-label">Name</label>
                    <input type="text" name="customer_name" class="form-control" id="customer_name" value="<?= $customer_name ?>">
                    <div class="text-danger" id="valid"><?= $customer_name_err ?></div>
                </div>
                <div class="form-group "> 
                    <label for="nrc" class="form-label">NRC</label>
                    <input type="text" name="nrc" class="form-control" id="nrc" value="<?= $nrc ?>">
                    <div class="text-danger" id="valid" ><?= $nrc_err ?></div>
                </div>
             
                <div class="form-group ">
                    <label for="phone_no" class="form-label">Phone Number</label>
                    <input type="text" name="phone_no" class="form-control" id="phone_no" value="<?=$phone_no?>">
                    <div class="text-danger" id="valid" ><?= $phone_no_err?></div>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" value="<?=$email?>">
                    <div class="text-danger" id="valid"><?= $email_err?></div>
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
        <h2 class="text-center" style="color: var(--nav-color);">Customer List</h2>
        <div class="card-body p-3">
           <div class="card">
                <div class="card-body">
                    <table class="table table-bordered  table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Customer Name</th>
                                <th>NRC</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Action</th>
                            
                            </tr>
                        </thead>
                        <tbody> 
                            <?php $customers = get_customer($mysqli)?>
                            <?php $i=1?>
                            <?php while($customer = $customers->fetch_assoc()){?>
                            <tr>
                                <td><?= $i?></td>
                                <td><?= $customer["customer_name"]?></td>
                                <td><?= $customer["nrc"]?></td>
                                <td><?= $customer["phone"]?></td>
                                <td><?= $customer["email"]?></td>
                                <td>
                                    <a href="?editId=<?=$customer['id']?>" class="btn btn-sm btn-success"><i class="fa fa-pen"></i></a>
                                    <button class="btn btn-sm btn-danger  deleteSelect" data-value="<?=$customer['id']?>" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            
                            <?php $i++;} ?>
                      
                            
                           
                        </tbody>
                    </table>
                </div>
           </div> 
        </div>
    </div>
</div>

<?php require_once("../layout/footer.php")?>