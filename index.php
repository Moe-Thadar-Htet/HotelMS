
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management Syatem</title>
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <script src="./asset/js/bootstrap.min.js"></script>
    <script src="./asset/js/jquery.min.js"></script>
</head>
<body>
    <?php require_once("./storage/db.php") ?>
    
        <div class="card mx-auto mt-5 login-container">
            <div class="card-body p-4">
                <h3 class="text-center">LogIn Form</h3>
                <form method="post">
                    <div class="form-floating mt-5">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email"/>
                        <label for="email" class="form-label">User Email</label>
                        <div id="valid"></div>
                    </div>

                    <div class="form-floating mt-2">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password"/>
                        <label for="password" class="form-label">Password</label>
                        <div id="valid"></div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="showpassword"/>
                        <label for="showpassword" class="form-check-label">Show password</label>
                    </div>
                    <button class="custom-btn mt-3 ">Log In</button>
                </form>
            </div>
        </div>

        <script>
            let showpassword = $("#showpassword");
            let password = $("#password");
            showpassword.on("click",()=>{
               if(showpassword.is(":checked")){
                password.get(0).type ="text";
                console.log(password);
               }else{
                password.get(0).type ="password";
               }
            })
        </script>
        

   
    <!-- <div class="card  login-container">
        <div class="card-body">
            <h2 class="text-center">Login Form</h2>
            <form method="post">
                <div class="form-floating my-5">
                    <input type="email" class="form-control" id="email" placeholder="name@gmail.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating mt-5 mb-2">
                    <input type="password" class="form-control" id="password" placeholder="password">
                    <label for="password">Password</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" id="show" class="form-check-input">
                    <label class="form-check-label" for="show">
                        Show Password
                    </label>
                </div>
                <button class="custom-btn mt-3">LOGIN</button>
            </form>  
        </div>
    </div>
    <script>
        let show = $("#show");
        let password = $("#password");
        show.on("click",()=>{
            if(show.is(":checked")){
                password.get(0).type = "text";
            }else{
                password.get(0).type = "password";
            }
        })
    </script> -->
</body>
</html>

