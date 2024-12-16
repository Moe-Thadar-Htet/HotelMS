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
    <div id="nav" class="navbar navbar-dark navbar-expand fixed-top" style="background-color: #161616;">
        <div class="container">
            <a href="index.html" class="navbar-brand me-5" style="color: #F5F5F5;">
                ADMIN
            </a>

            <ul class="navbar-nav">
            <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="nav-text btn btn-outline-info ms-auto">All Rooms</span>
                    </a>
                    <li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="nav-text btn btn-outline-success ms-auto">Available</span>
                    </a>
                    <li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <span class="nav-text btn btn-outline-danger ms-auto">Sold Out</span>
                            </a>
                        </li>
                    </li>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="nav-text btn btn-outline-primary ms-auto">Daily Income</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <span class="nav-text btn btn-outline-warning ms-auto">Add Room</span>
                    </a>
                    <li>
                <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="margin-top: 8px;">
                    Profile
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
            </ul>
            
        </div>
    </div>
</body>