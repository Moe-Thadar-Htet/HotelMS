<style>
    #valid{
    height: 35px;
    color: red;
    padding-top: 5px;
    padding-left: 10px;
    font-size: 14px;
    font-style: italic;
    }
   
</style>

<?php 

$customer_name = $customer_name_err = "";
$phone = $phone_err = "";
$division = $division_err ="";
$region = $region_err = "";
$citizen = $citizen_err = "";
$nrc_no = $nrc_no_err ="";
$email = $email_err ="";
$checkin = $checkin_err ="";
$checkout =$checkout_err = "";
$invalid = true;
$nrcstatus = true;
$status = true;

if(isset($_POST["customer_name"])){
    $customer_name = $_POST["customer_name "];
    $phone_no =  $_POST["phoneNumber"];
    $division =  $_POST["division"];
    $region =  $_POST["region"];
    $citizen =  $_POST["citizen"];
    $nrc_no =  $_POST["nrc_no"];
    $email = $_POST["email"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
   


    if($customer_name  === ""){
        $customer_name_err = "Customer Name doesn't blank! ";
        $invalid = false;
    }
    if($phone_no === ""){
        $phone_no_err = "Phone Number doesn't blank! ";
        $invalid = false;
    }
    if($division === ""){
        $division_err = "Division Code doesn't blank! ";
        $invalid = false;
        $nrcstatus = false;
    }
    if($region === ""){
        $region_err = "Region Name doesn't blank! ";
        $invalid = false;
        $nrcstatus = false;
    }
    if($citizen  === ""){
        $citizen_err = "Citizen doesn't blank! ";
        $invalid = false;
        $nrcstatus = false;
    }
    if($nrc_no  === ""){
        $nrc_no_err = "NRC Number doesn't blank! ";
        $invalid = false;
        $nrcstatus = false;
    }
    if($email === ""){
        $email_err = "Email doesn't blank! ";
        $invalid = false;
    }
    if($checkin === ""){
        $checkin_err = "Checkin Date doesn't blank! ";
        $invalid = false;
    }
    if($checkout  === ""){
        $checkout_err = "Checkout Date doesn't blank! ";
        $invalid = false;
    }
}

   if($nrcstatus){
        $nrc = $division . $region . $citizen . $nrc_no ;
        $status = false;
    }

    if($invalid){
        if($status){
            add_customer($mysqli,$customer_name,$nrc,$phone_no,$email,$checkin,$checkout);
        }

    }
?>


<div class="modal fade" id="sellRoomModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Room Number: <span class="room-no-value"></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" class="roomIdValue" name="roomId">
                    <div class="form-floating mt-2">
                        <input type="text" name="customer_name " class="form-control" id="customer_name " placeholder="Enter customer name" value="<?= $customer_name?>" />
                        <label for="customer_name " class="form-label">Customer Name</label>
                        <div class="text-danger" id="valid" style="font-size:12px;"><?= $customer_name_err?></div>
                    </div>
                    <div class="card">
                        <div class="crad-body" style="height:250px;">
                            <div class="fornrc d-flex mt-3">
                                <div class="form-group ms-3 col-4">
                                    <label for="division" class="form-label"> Division</label>
                                    <select name="division" id="division" class="form-select">
                                        <option value="1">1/</option>
                                        <option value="2">2/</option>
                                        <option value="3">3/</option>
                                        <option value="4">4/</option>
                                        <option value="5">5/</option>
                                        <option value="6">6/</option>
                                        <option value="7">7/</option>
                                        <option value="8">8/</option>
                                        <option value="9">9/</option>
                                        <option value="10">10/</option>
                                        <option value="11">11/</option>
                                        <option value="12">12/</option>
                                        <option value="13">13/</option>
                                        <option value="14">14/</option>     
                                    </select>
                                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $division_err ?></div>
                                </div>
                                <div class="form-group  ms-5 col-6">
                                    <label for="region" class="form-label">Region</label>
                                    <input type="text" name="region" class="form-control" id="region" placeholder="Enter Region Name" />
                                    <div class="text-danger" id="valid" style="font-size:12px;"><?= $region_err ?></div>
                                </div>

                            </div>

                            <div class="fornrc d-flex">
                                <div class="form-group ms-3 col-4">
                                    <label for="citizen" class="form-label">Citizen</label>
                                    <select name="citizen" id="citizen" class="form-select">
                                        <option value="1">C (Citizen) </option>
                                        <option value="2">AC (Associated Citizen) </option>
                                        <option value="3">NC (Naturalized Cititzen) </option>
                                        <option value="4">V (National Verification) </option>
                                        <option value="5">M (Monk) </option>
                                        <option value="6">N (Nun) </option>
                                    </select>
                                    <div class="text-danger" id="valid" style="font-size:12px;"></div>
                                </div>
                                <div class="form-group ms-5 col-6">
                                    <label for="nrc_no" class="form-label">NRC Number</label>
                                    <input type="number" name="nrc_no" class="form-control" id="nrc_no" placeholder="Enter Your NRC Number" />
                                    <div class="text-danger" id="valid" style="font-size:12px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mt-2">
                        <input type="number" name="phoneNumber" class="form-control" id="phoneNumber" value="<?= $phone?>" />
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <div class="text-danger" id="valid" style="font-size:12px;"><?= $phone_err?></div>
                    </div>

                    <div class="form-floating mt-2">
                        <input type="text" name="email" class="form-control" id="email" value="<?= $email?>" />
                        <label for="email" class="form-label">Email Address</label>
                        <div class="text-danger" id="valid" style="font-size:12px;"><?= $email_err?></div>
                    </div>

                    <div class="form-floating mt-2">
                        <div class="mt-4">Check-in Date
                            <input type="date" name="checkin" class="form-control" id="checkin" required="">
                            <div class="text-danger" id="valid" style="font-size:12px;"><?= $checkin_err?></div>
                        </div>
                        
                        <div class="mt-4">Check-out Date
                            <input type="date" name="checkout" class="form-control" id="checkout" required="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit"  class="btn btn-danger">Sell a Room</button>
                </div>
           
            </form>
        </div>
    </div>
</div>