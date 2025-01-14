<?php require_once("../auth/login.php") ?>
<?php require_once("../layout/header.php")?>
<?php require_once("../layout/navbar.php")?>
<div class="role-container mx-auto mt-5">
    <div class="admin">
        <button class="btn btn-admin btn-outline-light btn-md col-3">
            <a href="./index.php" class="card-title card-role"><i class="fa-solid fa-home me-2"></i>Add Home</a>
        </button>
        <button class="btn btn-admin btn-outline-light btn-md col-3">        
            <a href="./add_room.php" class="card-title card-role"> <i class="fa-solid fa-hotel me-2"></i>Room</a>
        </button>
        <button class="btn btn-admin btn-outline-light btn-md col-3">        
            <a href="./add_room.php" class="card-title card-role"> <i class="fa-solid fa-bed me-2"></i>Room Type</a>
        </button>    
    </div>

    <div class="admin">
        <button class="btn btn-admin btn-outline-light btn-md col-3">
            <a href="./add_room_booking.php" class="card-title card-role"><i class="fa-solid fa-bookmark me-2"></i>Room Booking</a>
        </button>
        <button class="btn btn-admin btn-outline-light btn-md col-3">        
            <a href="./add_booking.php" class="card-title card-role"> <i class="fa-solid fa-phone me-2"></i>Booking</a>
        </button>
        <button class="btn btn-admin btn-outline-light btn-md col-3">        
            <a href="./add_customer.php" class="card-title card-role"> <i class="fa-solid fa-users me-2"></i>Customer</a>
        </button>    
    </div>
    <div class="admin">
        <button class="btn btn-admin btn-outline-light btn-md col-3">
            <a href="./add_staff.php" class="card-title card-role" ><i class="fa-solid fa-user-tie me-2"></i>Staff</a>
        </button>
        <button class="btn btn-admin btn-outline-light btn-md col-3">        
            <a href="./add_duty.php" class="card-title card-role"><i class="fa-solid fa-circle-check me-2"></i>Duty</a>
        </button>
        <button class="btn btn-admin btn-outline-light btn-md col-3">        
            <a href="./add_duty_staff.php" class="card-title card-role"><i class="fa-solid fa-business-time me-2"></i>Duty Staff Detail</a>
        </button>    
    </div>
    <div class="admin">
        <button class="btn btn-admin btn-outline-light btn-md col-3">
            <a href="./add_user.php" class="card-title card-role"><i class="fa-solid fa-user me-2"></i>User</a>
        </button>
        <button class="btn btn-admin btn-outline-light btn-md col-3">        
            <a href="../reception/index.php"  class="card-title card-role"> <i class="fa-solid fa-list me-2"></i>Reception view</a>
        </button>
        <button class="btn btn-admin btn-outline-light btn-md col-3">        
            <a href="../booking/index.php" class="card-title card-role"> <i class="fa-solid fa-home me-2"></i>Customer view</a>
        </button>    
    </div>  
</div>
  
      

<div class="role-container mx-auto mt-2">
    <div class="admin d-flex ">
        <div class="card col-2 ">
            <div class="card-body">
                <i class="fa-solid fa-hotel"></i>
                <span class="admin-text">Total Room</span>
            </div>

        </div>
        <div class="card col-2 ms-5">
            <div class="card-body">
                <i class="fa-solid fa-bed"></i>
                <span class="admin-text">Total Room Type</span>
            </div>

        </div>
        <div class="card col-2 ms-5">
            <div class="card-body">
                <i class="fa-solid fa-users"></i>
                <span class="admin-text">Total Customer</span>
            </div>

        </div>
        <div class="card col-2 ms-5">
            <div class="card-body">
                <i class="fa-solid fa-user-tie me-2"></i>
                <span class="admin-text">Total Staff</span>
            </div>

        </div>
        <div class="card col-2 ms-5">
            <div class="card-body">
                <i class="fa-solid fa-bookmark"></i>
                <span class="admin-text">Total Booking</span>
            </div>

        </div>
      
        
    </div>


</div>









<?php require_once("../layout/footer.php")?>
