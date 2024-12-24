<!-- Admin_Navigation_Bar -->
<div id="nav" class="navbar navbar-dark navbar-expand fixed-top" style="background-color: #1A1A1A;">
        <div class="container">
            <a href="index.html" class="navbar-brand me-5" style="color: #F5F5F5;">
                Reception
            </a>

            <ul class="navbar-nav">
            <li class="nav-item">
                    <a href="http://localhost/HotelMS/reception/index.php" class="nav-link" >
                        <span class="nav-text btn btn-outline-info ms-auto" id="all-room">All Rooms <i class="fa fa-bed"></i></span>
                    </a>
                    <li>
                <li class="nav-item">
                    <a href="http://localhost/HotelMS/available.php" class="nav-link active">
                        <span class="nav-text btn btn-outline-success ms-auto" id="available">Available <i class="fa fa-broom"></i></span>
                    </a>
                    <li>
                        <li class="nav-item">
                            <a href="http://localhost/HotelMS/soldout.php" class="nav-link active">
                                <span class="nav-text btn btn-outline-danger ms-auto" id="sold-out">Sold Out<i class="fa fa-exclamation-triangle" style="padding-left: 5px;"></i></span>
                            </a>
                        </li>
                    </li>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/HotelMS/daily_income.php" class="nav-link active">
                        <span class="nav-text btn btn-outline-primary ms-auto" id="daily-income">Daily Income<i class="fa fa-dollar-sign" style="padding-left: 5px;"></i></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="nav-text btn btn-outline-warning ms-auto" id="booked">Booked<i class="fas fa-calendar-check" style="padding-left: 5px;"></i>
                        </span>
                    </a>
                    <li>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 8px;">
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                Profile <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                                Logout <i class="fa fa-sign-out-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </ul>
            
        </div>
    </div>
   