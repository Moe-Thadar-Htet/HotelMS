<?php 
if(isset($_POST["name"])){
    $name = $_POST["name"];
    echo "hello";
}
 ?>
<div class="modal fade" id="bookRoomModal">
    <div class="modal-dialog">
        <form method="post">
        <input type="hidden" class="roomIdValue" name="roomId">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Room Number: <span class="room-no-value"></span>  </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mt-2">
                        <input type="name" name="name" class="form-control" id="name" placeholder="Enter customer name" />
                        <label for="name" class="form-label">Customer Name</label>
                    </div>

                    <div class="form-floating mt-2">
                        <input type="email" email="email" class="form-control" id="email" placeholder="Enter customer email" />
                        <label for="email" class="form-label">Email Address</label>
                    </div>

                    <div class="form-floating mt-2">
                        <input type="phoneNumber" name="phoneNumber" class="form-control" id="phoneNumber" placeholder="Phone Number" />
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                    </div>

                    <div class="form-floating mt-2">
                        <div class="mt-4">Check-in Date
                            <input type="date" name="checkin" class="form-control" id="checkin" required="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning">Book</button>
                </div>
            </div>
        </form>
    </div>
</div>