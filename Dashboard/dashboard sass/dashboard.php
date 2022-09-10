<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twilight Hotel Dashboard</title>

    <!-- *************sass ************ -->
    <link rel="stylesheet" href="../dashboard sass/dashboard.css">

    <!-- ************fontawesome************ -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <header>
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
     <div class="dashboard">
          <div class="dashboard-logo">
              <span>Best</span>&nbsp;<span>Tour</span>&nbsp;<span>Hotel</span>
          </div>
        
          <div class="dashboard-list">
        <ul>
            <li><i class="fa fa-user"><a href="#">Customer Registeration</a></i></li>
            <li><i class="fa fa-hotel"><a href="#">Room Booking</a></i></li>
            <li><i class="fa fa-hotel"><a href="#">Room Available</a></i></li>
            <li><i class="fa fa-calculator"><a href="#">Overview</a></i></li>
        </ul>
     </div>
          
     </div>

    <script type="text/javascript">

            $('#searchbutton').click(function(){
               $('.search').slideToggle();
                   
            });
     </script>
</body>
</html>