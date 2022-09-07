<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TwilightHotel</title>

    <!-- ***********************linking sass************* -->

    <link rel="stylesheet" href="./scss/TwilightHotel.css">

</head>
<body>
    <main>
        <div class="form">
            <div class="twilighthotel-form">
               <form method="$_POST" autocomplete="off">
                         <h1>Hotel Twilight Book Now</h1>
                         <div class="hotel-form">
                            <div class="fullname">
                                <input type="text" placeholder="Fullname">
                            </div>
                            <div class="email">
                                <input type="email" placeholder="Email">
                            </div>
                            <div class="mobile">
                                <input type="text" placeholder="Mobile">
                            </div>
                            <div class="room">
                                  <select class="room" placeholder="room">
                                    <option>Choose Room</option>
                                    <option>Normal</option>
                                    <option>Semi-Deluxe</option>
                                    <option>Deluxe</option>
                                    <option>Luxury</option>
                                  </select>
                            </div>
                     <div class="guest">
                        <select name="guest" palceholder="Guest">
                            <option>Guest</option>
                             <option>1</option>
                             <option>2</option>
                             <option>3</option>
                             <option>4</option>
                             <option>5</option>
                             <option>6</option>
                             <option>7</option>
                             <option>8</option>
                             <option>9</option>
                             <option>10</option>
                             </select>
                     </div>
                      <div class="check-in">
                          <input type="date" placeholder="Check-In">
                      </div>
                      <div class="check-out">
                          <input type="date" placeholder="Check-Out">
                      </div>
                      <div class="submit">
                         <button>Check Availability</button>
                      </div>

                         </div>
               </form>
            </div>
        </div>
    </main>
</body>
</html>