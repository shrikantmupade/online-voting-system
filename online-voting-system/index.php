<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aadhaar-Voting | Login</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
    
    <body class="gray-bg">
          <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>
                    <h2 class="logo-name"><img src="images/e-voting-logo.png" width="150"></h2>
                </div>
                <h3>Welcome Vote here</h3>
<div class="m-t" role="form" >
                <form action="api/login.php" method="POST">
                <div class="form-group">
                    <input type="number" name="mob" class="form-control" placeholder="Enter mobile" required autofocus><br>
                    <input type="password" name="pass" class="form-control" placeholder="Enter password" required autofocus><br>
                    <select name="role" style="width: 20%; border: 2px  black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select>
                    </div>                 
                    <button id="loginbtn" class="btn btn-primary block full-width m-b login" type="submit" name="loginbtn">Login</button>
                    New user? <a href="register.php">Register here</a>
                </form>
            </div>

            </div>
        </div>
        <!--<div class="footer">
            <ul class="class   copy-right">
            <div>
              <p align="right">Guided By Mrs.Poonam Borase mam</p>
                </div>
            </ul>
            </div>-->
    </body>
</html>