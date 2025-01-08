<? require_once('./]asset/css/style.css')?>
<?php 
$name = $name_err = "";
$phone = $phone_err = "";
$nrc = $nrc_err = "";
$email = $email_err ="";
$checkin = $checkin_err ="";
$checkout =$checkout_err = "";



if(isset($_POST["name"])){
    $name = $_POST["name"];
    $phone =  $_POST["phoneNumber"];
    $email = $_POST["email"];
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];



}






?>


<div class="modal fade" id="sellRoomModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Room Number: <span class="room-no-value"></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post">
                    <input type="hidden" class="roomIdValue" name="roomId">
                    <div class="form-floating mt-2">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter customer name" />
                        <label for="name" class="form-label">Customer Name</label>
                        <div class="text-danger" id="valid" style="font-size:12px;"></div>
                    </div>
                    <div class="card p-3">
                        <div class="crad-body">
                        <div class="fornrc d-flex">
                        <div class="form-group col-2">
                            <label for="division" class="form-label">Division</label>
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
                            <div class="text-danger" id="valid" style="font-size:12px;"></div>
                        </div>
                        <div class="form-group  ms-5 col-8">
                            <label for="region" class="form-label">Region</label>
                            <input type="text" name="region" class="form-control" id="region" placeholder="Enter Region Name" />
                            <div class="text-danger" id="valid" style="font-size:12px;"></div>
                        </div>
                    

                    </div>

                    <div class="fornrc d-flex">
                        <div class="form-group  col-2">
                            <label for="division" class="form-label">Division</label>
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
                            <div class="text-danger" id="valid" style="font-size:12px;"></div>
                        </div>
                        <div class="form-group ms-5 col-8">
                            <label for="region" class="form-label">Region</label>
                            <input type="text" name="region" class="form-control" id="region" placeholder="Enter Region Name" />
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
                        </div>
                        <div class="mt-4">Check-out Date
                            <input type="date" name="checkout" class="form-control" id="checkout" required="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit"  class="btn btn-danger">Sell a Room</button>
            </div>
        </div>
    </div>
</div>