
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="employeepage.css">
  <title>Staff Page</title>

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
            <h5> Please fill in details of your request </h5>


            <form name="employeeForm" method="post" action="https://sheetdb.io/api/v1/y7m4qp1zbcy58" id="sheetdb-form">
              <label for=reqname></label>
              <input type="text" placeholder=" Enter Full Name" id="fullname" name="data[reqname]" required><br><br>  <br><br>

              

              <label for="dept"></label>
              <input list="departments" placeholder="Choose Department" id="department" name="data[dept]" required>
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

              <label for="purpose">State Purpose of Request</label> 
              <textarea placeholder="Please State Purpose Of Request" id="reason" name="data[purpose]" size=50 required> </textarea> <br><br> <br><br>

              <label for="collectdate">Date of Request</label>
              <input type="datetime-local" placeholder="Date of Request" id="dateofreq" name="data[collectdate]" required><br><br>  <br><br>

              <label for="eturndate">Expected Date of Return</label>
              <input type="datetime-local" placeholder="Expected Date of Return" id="dateofret" name="data[returndate]" required><br><br>  <br><br>

              <label for="reqmail"></label>
              <input type="email" placeholder="Enter Your Email" id="reqmail" name="data[reqmail]" required> <br><br>  <br><br>
              
              <label for="reqtel"></label>
              <input type="text" placeholder="Telephone no." id="tel" name="data[reqtel]" ><br><br>  <br><br>
            
               <input type="submit" value="Submit Request" class="createacc" >
           <!-- <button type="submit" class="createacc""><a href="transportoff.html"> Log In </a> </button><br><br> -->




            </form>

            <h5 class="bottomtext">Check on request status? <a href="index.php" rel="noopener noreferrer">Visit
                email</a></h5>

          
          
        </div>
      </div>
    </div>
  </main>
</body>

</html>