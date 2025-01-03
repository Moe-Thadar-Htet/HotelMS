
<div style="margin-top: 120px;">
    <section id="superior">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="card-title text-center">
                    Superior Room
                </h3>
                <!-- <div class="d-flex justify-content-between">
                    <h6><i class="text-primary">Even Number = Double Bed</i></h6>
                    <h6><i class="text-primary">Odd Number = Twin Bed</i></h6>
                </div> -->
                <div class="container mt-5">
                    <?php $superior = get_sold_out_superior_rooms($mysqli) ?>
                    <div class="row g-3">
                        <?php while($room = $superior->fetch_assoc()){ ?>
                            <div class="col-2">
                                <button class="room-btn <?php 
                                if($room['taken'] == 0){ 
                                    echo "green"; 
                                }else if($room['taken'] == 1){
                                    echo "red";
                                }else{
                                    echo "yellow";
                                }
                                ?>">
                                    <h1><?= $room['room_no'] ?></h1>
                                    <?php if($room['taken'] != 0){ ?>
                                        <h6 class="btn btn-outline-dark"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#customerModal"
                                        data-name="" 
                                        data-nrc="" 
                                        data-phone=""
                                        data-email=""
                                        data-room =""
                                        onclick="showCustomerDetails(this)">View Details</h6>
                                    <?php } ?>
                                </button>
                            </div>

                        <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div style="margin-top: 30px;">
    <section id="deluxe">
        <div class="card shadow">
            <div class="card-body">
                <h3 class="card-title text-center">
                    Deluxe Room
                </h3>
                <!-- <div class="d-flex justify-content-between">
                    <h6><i class="text-primary">Even Number = Twin Bed</i></h6>
                    <h6><i class="text-primary">Odd Number = Double Bed</i></h6>
                </div> -->
                <!-- Grid container for buttons -->
                <div class="container mt-5">
                <?php $deluxe = get_sold_out_deluxe_rooms($mysqli) ?>
                    <div class="row g-3">
                    <?php while($room = $deluxe->fetch_assoc()){ ?>
                            <div class="col-2">
                                <button class="room-btn <?php 
                                if($room['taken'] == 0){ 
                                    echo "green"; 
                                }else if($room['taken'] == 1){
                                    echo "red";
                                }else{
                                    echo "yellow";
                                }
                                ?>

                                ">
                                    <h1><?= $room['room_no'] ?></h1>
                                    <?php if($room['taken'] != 0){ ?>
                                        <h6 class="btn btn-outline-dark"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#customerModal"
                                        data-name="" 
                                        data-nrc="" 
                                        data-phone=""
                                        data-email=""
                                        data-room =""
                                        onclick="showCustomerDetails(this)">View Details</h6>
                                    <?php } ?>
                                </button>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <div class="modal fade" id="customerModal" tabindex="-1" aria-labelledby="customerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="customerModalLabel">Customer Information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="customerInfo">
            <p><strong>Name:</strong> <span id="customerName"></span></p>
            <p><strong>NRC:</strong> <span id="customerNrc"></span></p>
            <p><strong>Phone:</strong> <span id="customerPhone"></span></p>
            <p><strong>Email:</strong> <span id="roomNo"></span></p>
            <p><strong>Room No:</strong> <span id="roomNo"></span></p>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>

    <script>
    function showCustomerDetails(button) {
        var customerName = button.getAttribute('data-name');
        var customerNrc = button.getAttribute('data-nrc')
        var customerPhone = button.getAttribute('data-phone');
        var customerEmail = button.getAttribute('data-email');
        var roomNo = button.getAttribute('data-room');
        
        document.getElementById('customerName').textContent = customerName;
        document.getElementById('customerNrc').textContent = customerNrc;
        document.getElementById('customerPhone').textContent = customerPhone;
        document.getElementById('customerEmail').textContent = customerEmail;
        document.getElementById('roomNo').textContent = roomNo;
    }
</script>

<?php require_once("../layout/footer2.php") ?>
