<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Signup</title>

    <!-- ***********sign up form**************** -->
    <link rel="stylesheet" href="../form scss/form.css">
</head>
<body>
    <main>
        <div class="customer-sign">
          <div class="form-image">
              <img src="../Images/hospitality.jpg">
          </div>
            <div class="form-section">
                <form method="POST">
                    <h1>Customer Signup</h1>
                    <br>
                    <div class="form-div">
                          <label>FullName:</label>
                          <input type="text" required autocomplete="off" name="fullname">
                          <label>Email:</label>
                          <input type="email" required autocomplete="off" name="email">
                          <label>Address:</label>
                          <input type="text" required autocomplete="off" name="address">
                          <label>Mobile:</label>
                          <input type="text" required autocomplete="off" name="mobile">
                          <label>Password</label>
                          <input type="password" required autocomplete="off" name="password" id="password">
                          <label>Re-type Password</label>
                          <input type="password" required autocomplete="off" name="retypepassword" id="confirmpassword">
                          <span id="password_not_matching"></span>
                          <button name="submit" id="submit" onclick="return load()">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </main>
    
    <!-- ***********login form********** -->
    <?php
    include('../database.php');

        if(isset($_POST['submit'])){
        
            $fullname = mysqli_real_escape_string($sqlconnection, $_POST['fullname']);
            $email = mysqli_real_escape_string($sqlconnection, $_POST['email']);
            $address = mysqli_real_escape_string($sqlconnection, $_POST['address']);
            $mobile = mysqli_real_escape_string($sqlconnection, $_POST['mobile']);
            $password = mysqli_real_escape_string($sqlconnection, $_POST['password']);
            $retype_password = mysqli_real_escape_string($sqlconnection, $_POST['retypepassword']);
           
            $pass_encrypt = password_hash($password, PASSWORD_BCRYPT);
            $retype_encrypt = password_hash($$retype_password, PASSWORD_BCRYPT);
               
              if($password == $retype_password){
            $database_insert = "INSERT INTO customersignup(FullName, Email, Address, Mobile, Password, RetypePassword)VALUES('$fullname', '$email', '$address', '$mobile', '$pass_encrypt', '$retype_encrypt')";
             $customer_signup = mysqli_query($sqlconnection, $database_insert);
                          
                print "<h1>Login Successful</h1>";
                          // header('location: twilighthotel.php');
              }else{
                echo "<h1>Password are not matching</h1>";
              }
        }
        
      ?>

      <script type="text/javascript"> 
           function load(){
            // return true;
            let password = document.getElementById('password');
            let confirm_password = document.getElementById('confirmpassword');
            let password_macthing = document.getElementById('password_not_matching');

            if(password == confirm_password){
              password_macthing.innerText = "password are not matching";
              password_macthing.style.color = "red";
            }
          
        }
         </script>
</body>
</html>