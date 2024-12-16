<?php require_once("../auth/login.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="/asset/css_admin/style.css"
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.mincss"> 
    <script src="java/bootstrap.bundle.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <!-- Admin_Navigation_Bar -->
    <div id="nav" class="navbar navbar-dark navbar-expand fixed-top" style="background-color: #1A1A1A;">
        <div class="container">
            <a href="index.html" class="navbar-brand me-5" style="color: #F5F5F5;">
                ADMIN
            </a>

            <ul class="navbar-nav">
            <li class="nav-item">
                    <a href="#" class="nav-link" >
                        <span class="nav-text btn btn-outline-info ms-auto" id="all-room">All Rooms</span>
                    </a>
                    <li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="nav-text btn btn-outline-success ms-auto" id="available">Available</span>
                    </a>
                    <li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="nav-text btn btn-outline-danger ms-auto" id="sold-out">Sold Out</span>
                            </a>
                        </li>
                    </li>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="nav-text btn btn-outline-primary ms-auto" id="daily-income">Daily Income</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="nav-text btn btn-outline-warning ms-auto" id="add-room">Add Room</span>
                    </a>
                    <li>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 8px;">
                        Profile
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
</body>

<script>
    // Get references to all buttons
    let allroom = document.getElementById("all-room");
    let available = document.getElementById("available");
    let soldout = document.getElementById("sold-out");
    let dailyincome = document.getElementById("daily-income");
    let addroom = document.getElementById("add-room");

    let buttons = [allroom, available, soldout, dailyincome, addroom];

    function resetButtonStyles() {
        buttons.forEach(button => {
            button.style.background = "";
            button.style.color = "";
        });
    }

    allroom.addEventListener("click", () => {
        resetButtonStyles();
        allroom.style.background = "#10CAF0";
        allroom.style.color = "#FFFFFF";
    });

    available.addEventListener("click", () => {
        resetButtonStyles();
        available.style.background = "#198753";
        available.style.color = "#FFFFFF";
    });

    soldout.addEventListener("click", () => {
        resetButtonStyles();
        soldout.style.background = "#DC3444";
        soldout.style.color = "#FFFFFF";
    });

    dailyincome.addEventListener("click", () => {
        resetButtonStyles();
        dailyincome.style.background = "#0C6DFD";
        dailyincome.style.color = "#FFFFFF";
    });

    addroom.addEventListener("click", () => {
        resetButtonStyles();
        addroom.style.background = "#FFC007";
        addroom.style.color = "#FFFFFF";
    });
</script>
