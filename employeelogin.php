<?php include ('server.php') ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="employeepage.css">
  <title>Staff Login</title>

  
</head>

<body>
  <main>
    <div class="maincontent">
      <!-- <div class="side1main">
        <div class="side1">
          <a href="index.html"><img src="CSIRlogo.jpg" alt="logo" srcset=""></a>


        </div>
      </div> -->
      <div class="side2">
        <div class="side2content">
          <a href="index.php"><img src="CSIRlogo.jpg" alt="logo" srcset=""></a>

          <h3>Log In As Staff Member</h3>
          <h5>Enter Your Credentials To Log In</h5>
          
          <form name="staffForm" method="post" action="employeelogin.php">
            <label for="username"></label>
            <input type="text" name="username" placeholder="Username Name" required><br><br>

            <label for="staffmail"></label>
            <input type="email" name="staffmail" id="passwordd" placeholder="Enter e-mail(optional)"><br><br>

            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="Type Password" required><br><br>

             <input type="submit" name="login_user" value="Login" class="createacc" id="logButton" >
           <!-- <button type="submit" class="createacc""><a href="transportoff.html"> Log In </a> </button><br><br> -->
          </form>

          <h5 class="bottomtext">New Staff?<a href="staffregister.php"
              rel="noopener noreferrer">Please Register</a></h5>

        </div>
      </div>
    </div>
  </main>
</body>

</html>