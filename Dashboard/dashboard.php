<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twilight Hotel Dashboard</title>

    <!-- *************sass ************ -->
    <link rel="stylesheet" href="../Dashboard/dashboard sass/dashboard.css">

    <!-- ************fontawesome************ -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <header class="header">
        <div class="hamburger">
           <i class="fa fa-bars" id="hamburger"></i>
        </div>
        <div class="search">
             <input type="text" placeholder="search" id="search">
        </div>
        <div class="search-icon">
             <i class="fa fa-search" id="searchbutton"></i>
        </div>
        <div class="notification">
           <i class="fa fa-bell"></i>
        </div>
    </header>
    
    <!-- *******************hamburger menu left**************** -->
     <div class="dashboard">
          <div class="dashboard-logo">
              <span>Best</span>&nbsp;<span>Tour</span>&nbsp;<span>Hotel</span>
          </div>
        
          <div class="dashboard-list">
        <ul>
            <li><i class="fa fa-user"><a href="#" id="customer-registeration">Customer Registeration</a></i></li>
            <li><i class="fa fa-hotel"><a href="#" id="collapse">Room Booking</a></i></li>
            <li><i class="fa fa-hotel"><a href="#" id="collapse">Room Available</a></i></li>
            <li><i class="fa fa-file"><a href="#" id="collapse">Reports</a></i></li>
        </ul>
     </div> 
     </div>

     <div class="main">
               <div class="customer-registeration" id="display-content">
                     <table>
                         <tr>
                            <th>ID</th>
                            <th>FullName</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Mobile</th>
                            <th>Password</th>
                            <th>Retype-password</th>
                            <th>Delete</th>
                         </tr>
                         
                        <?php 
                        include('../database.php');
                          $customer_table = "SELECT *FROM customersignup";
                          $table = mysqli_query($sqlconnection, $customer_table);

                          while($data = mysqli_fetch_assoc($table)){

                       ?>
                         <tr>
                            <td><?php print $data['ID']?></td>
                            <td><?php print $data['FullName']?></td>
                            <td><?php print $data['Email']?></td>
                            <td><?php print $data['Address']?></td>
                            <td><?php print $data['Mobile']?></td>
                            <td><?php print $data['Password']?></td>
                            <td><?php print $data['RetypePassword']?></td>
                            <td><i class="fa fa-trash"></i></td>
                         </tr>
                       <?php } ?>
                     </table>
               </div>
     </div>

    <script type="text/javascript">

            $('#searchbutton').click(function(){
               $('.search').slideToggle();
                   
            });

            $('#hamburger').click(function(){
                $('.dashboard-list').animate({
                    width: "toggle"
                });
            });
            
            $('#customer-registeration').click(function(){
                $('.main').show();
                $('.dashboard').hide();
            });
            $('#hamburger').click(function(){
                $('.main').hide();
                $('.dashboard').show();
            });
     </script>
</body>
</html>