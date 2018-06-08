<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<title>Login</title>
</head>
<body>

    <!-- NAVIGATION BAR-->

    <nav class="navbar navbar-expand-sm justify-content-center bg-dark">
        <a href="index.php" class="navbar-brand">LoginForm</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collpasedata">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="collpasedata">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--  END OF NAVIGATION BAR-->

    <!--  LOGIN FORM -->
    <div class="container">
        <div class="row">
                <div class="container col-md-6">
                        <br>
                        <h2>Login form</h2>
                        <hr>
                       
                        <form action="loginuser.php" method="post">
                            
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd" required>
                            </div>
                                                        
                            <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="container col-md-6">
                            <br>
                            <h2>Signup form</h2>
                            <hr>
                           
                            <form action="login.php" method="post">
                                <div class="form-group">
                                    <label for="Username">Username</label>
                                    <input type="text"  class="form-control" name="username" placeholder="User name" id="Uname" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd" required>
                                </div>
                                <div class="form-group">
                                    <label for="cpwd">Confirm Password:</label>
                                    <input type="password" class="form-control" id="cpwd" placeholder="Confirm Password" name="cpswd" required>
                                </div>
                                
                                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
                            </form>
                        </div>
        </div>
    </div>
    <!--  END OF LOGIN FORM -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>