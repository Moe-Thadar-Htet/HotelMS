<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forgot Password - Step 1</title>
        <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
        <link rel="stylesheet" href="./asset/css/style.css">
    </head>
    <div class="main">
        <div class="card mx-auto my-5 forgot-password-container">
            <div class="card-body p-4">
                <h3 class="text-center">Forgot Password - Step 1</h3>
                <p class="text-center text-muted">Enter your registered email address.</p>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger"><?= $_GET['error'] ?></div>
                <?php } ?>
                <form method="post" action="forgot_password_step1.php">
                    <div class="form-floating mt-4">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required />
                        <label for="email" class="form-label">Email Address</label>
                    </div>
                    <button class="custom-btn mt-4 w-100">Next</button>
                </form>
                <div class="text-center mt-3">
                    <a href="index.php" class="btn btn-link">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
            <div class="main">
                <div class="card mx-auto my-5 forgot-password-container">
                    <div class="card-body p-4">
                        <h3 class="text-center">Forgot Password - Step 2</h3>
                        <p class="text-center text-muted">Enter your username associated with the email.</p>
                        <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger"><?= $_GET['error'] ?></div>
                        <?php } ?>
                        <form method="post" action="forgot_password_step2.php">
                            <div class="form-floating mt-4">
                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" required />
                                <label for="username" class="form-label">Username</label>
                            </div>
                            <button class="custom-btn mt-4 w-100">Next</button>
                        </form>
                    </div>
                </div>
            </div>
            
                <div class="main">
                    <div class="card mx-auto my-5 forgot-password-container">
                        <div class="card-body p-4">
                            <h3 class="text-center">Forgot Password - Step 3</h3>
                            <p class="text-center text-muted">Enter your registered phone number.</p>
                            <?php if (isset($_GET['error'])) { ?>
                                <div class="alert alert-danger"><?= $_GET['error'] ?></div>
                            <?php } ?>
                            <form method="post" action="forgot_password_step3.php">
                                <div class="form-floating mt-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your phone number" required />
                                    <label for="phone" class="form-label">Phone Number</label>
                                </div>
                                <button class="custom-btn mt-4 w-100">Next</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="main">
                    <div class="card mx-auto my-5 forgot-password-container">
                        <div class="card-body p-4">
                            <h3 class="text-center">Reset Password</h3>
                            <form method="post" action="process_reset_password.php" onsubmit="return validatePassword()">
                                <div class="form-floating mt-4">
                                    <input type="password" name="new_password" class="form-control" id="new_password" placeholder="Enter your new password" required />
                                    <label for="new_password" class="form-label">New Password</label>
                                </div>
                                <div class="form-floating mt-4">
                                    <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm your new password" required />
                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                    <div id="error_message" style="color: red; display: none;">Passwords do not match!</div>
                                </div>
                                <button class="custom-btn mt-4 w-100">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
                
                <script>
        function validatePassword() {
        var newPassword = document.getElementById('new_password').value;
        var confirmPassword = document.getElementById('confirm_password').value;
        
        if (newPassword !== confirmPassword) {
            document.getElementById('error_message').style.display = 'block';
            return false;
        } else {
            document.getElementById('error_message').style.display = 'none';
            return true;
        }
    }
</script>
</body>
</html>
