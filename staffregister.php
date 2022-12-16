 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="employeepage.css">
  <title>STAFF REGISTRATION</title>
  
</head>

<body>
  <main>
    <div class="maincontent">
      <div class="side1main">
        <div class="side1">
          <a href="index.php"> <img src="CSIRlogo.jpg" alt="logo" srcset=""> </a>

            <!--  </div>
        </div> -->
        <!-- <div class="side2">
                <div class="side2content"> -->
            <h3>IIR - GATE PASS</h3>
            <h5> Please fill in your details </h5>


            <form name="employeeForm" method="post" action="insert.php" id="sheetdb-form">
              <label for=username></label>
              <input type="text" placeholder=" Enter Full Name" id="fullname" name="username" required><br><br>  <br><br>

              

              <label for="dept"></label>
              <input list="departments" placeholder="Choose Department" id="department" name="division" required>
              <datalist id="departments">
                <option value = "Engineering Design and Prototyping Divion">
                <option value = "Metrology Division">  
                <option value = "Materials and Manufacturing Division">
                <option value = "Sustainable Energy Technologies Division">
                <option value = "Sanitation and Environment Management Division">
                <option value = "Buiness Services and Information Division">
                <option value = "Finance and Accounts Division">
                <option value = "Human Resources and Admin">
                <option value = "Projects Office">
                <option value = "Emerging Engineering Technologies Division">
              </datalist>  
                
              <br><br>  <br><br>

              

              <label for="staffmail"></label>
              <input type="email" placeholder="Enter Your Email" id="reqmail" name="staffmail" required> <br><br>  <br><br>
              
              <label for="password_1"></label>
              <input type="password" placeholder="Password" id="tel" name="password_1" ><br><br>  <br><br>

              <label for="password_2"></label>
              <input type="password" placeholder="Repeat Password" id="tel" name="password_2" ><br><br>  <br><br>
            
               <input type="submit" value="Register " class="createacc" name="reg_user">
           <!-- <button type="submit" class="createacc""><a href="transportoff.html"> Log In </a> </button><br><br> -->


             

            </form>

            <h5 class="bottomtext">Already Registered?<a href="employeelogin.php" rel="noopener noreferrer"> Log In</a></h5>

          
          
        </div>
      </div>
    </div>
  </main>
</body>

</html>