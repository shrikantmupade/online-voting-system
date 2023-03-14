<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aadhaar-Voting | Registration</title>
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
                    <h1 class="logo-name"><img src="images/e-voting-logo.png" width="150"></h1>
                </div>
            <h3>Registration</h3>
  <div class="m-t"  role="form" >
                <form action="api/register.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name" required autofocus>&nbsp
                    <input type="number" name="mob" class="form-control" placeholder="Mobile" required autofocus><br>
                    <input type="password" name="pass" class="form-control" placeholder="Password" required autofocus>&nbsp
                    <input type="password" name="cpass" class="form-control" placeholder="Confirm Password" required autofocus><br>
                    <input style="width: 31%" type="text" name="add" class="form-control" placeholder="Address" required autofocus>
                </div>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required autofocus>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role" style="width: 20%; border: 2px  black" >
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select>
                    </div> <br>
                
                    <button id="loginbtn" class="btn btn-primary block full-width m-b login" type="submit" name="registerbtn">Register</button>
                    Already user? <a href="index.php">Login here</a>
                </form>
                
           </div>
           
           </div>

           


          </div>

          
    </body>
    
</html>