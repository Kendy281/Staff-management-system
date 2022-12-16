<?php


 


if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && 
        isset($_POST['division']) &&
        isset($_POST['staffmail']) &&
        isset($_POST['password']) ) {
        
 $username = $_POST['username'];
  $division = $_POST['division'];
  $staffmail = $_POST['staffmail'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2']; 
  $password = $_POST['password_1'];
  
    // connect to the database
$conn = new mysqli('sql8.freesqldatabase.com', 'sql8584709', 'XUIVAxqa2f', 'sql8584709');

    if(mysqli_connect_error()) {
     die ('Connection Error') ;
    }
    else {
     $SELECT = "SELECT * FROM users WHERE staffmail = ? LIMIT 1";
            $INSERT = "INSERT INTO users(username, division, staffmail, password) values(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $staffmail);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("ssss",$username, $division, $staffmail, $password);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
}
    //  else {
      //  echo "The two passwords do not match" ;
      //}
  
  

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($con, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: staffpage.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>