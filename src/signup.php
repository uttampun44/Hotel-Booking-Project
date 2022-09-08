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
                          <input type="text" required autocomplete="off">
                          <label>Email:</label>
                          <input type="email" required autocomplete="off">
                          <label>Address:</label>
                          <input type="text" required autocomplete="off">
                          <label>Mobile:</label>
                          <input type="text" required autocomplete="off">
                          <label>Password</label>
                          <input type="password" required autocomplete="off">
                          <label>Re-type Password</label>
                          <input type="password" required autocomplete="off">
                          <button name="submit" id="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>