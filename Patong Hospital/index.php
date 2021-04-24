<!doctype html>

<html>
    <head>
    <title>Patong Hospital</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>



<body>
    <div id="login">
        <!-- <h2 class= "text-center text-red pt-5">For demonstration only!</h2> -->
        <h3 class="text-center text-white pt-5">     </h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="post">
                            <h3 class="text-center text-info">Patong Hospital - Online Patient System</h3>
                            <br>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>
                            <!-- <div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div> -->
                            <h6 style="color:red;">This website is made for demonstration only and is not affiliated with, or in any way represent Patong Hospital.</h6>
                        </form>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </div>

    
</body>

</html>

<?php 

if(isset($_POST['submit'])) { // THis is only for demonstration!!!!!!
    if($_POST['username'] == "admin" and $_POST['password'] == "admin") {
        echo "<script>location = 'home.php';</script>";
    } else {
        echo "<script>alert('Username or password incorrect');</script>";
    }
}
?>