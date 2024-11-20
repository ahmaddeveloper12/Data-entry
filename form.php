<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marquee Headline with Space</title>
  <style>
    .marquee-container {
      background-color: #333;
      color: #fff;
      font-family: 'Arial', sans-serif;
      font-size: 24px;
      font-weight: bold;
      padding: 10px 0; /* Add space at the top and bottom */
      margin: 20px 0;  /* Add space before and after marquee */
      text-align: center;
      border-radius: 5px;
    }

    marquee {
      padding-left: 50px; /* Add space before the text inside the marquee */
      padding-right: 50px; /* Add space after the text inside the marquee */
    }
  </style>
</head>
<body>

  <div class="marquee-container">
    <marquee behavior="scroll" direction="left">Kindly fill the form ! thanks</marquee>
  </div>

</body>
</html>

    <div class="login-container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="register.php" method="POST">
                <div class="input-group">
                    <label >Father</label>
                    <input type="text"  name="father" placeholder="Enter your father name" required>
                </div>
                <div class="input-group">
                    <label for="email">Mother</label>
                    <input type="text"  name="mother" placeholder="Enter your Mother name" required>
                </div>
                <div class="input-group">
                    <label for="email">Sister</label>
                    <input type="text"  name="sister" placeholder="Enter your Sister name" required>
                </div>

                <div class="input-group">
                    <label for="password">Sister2</label>
                    <input type="Text"  name="sister2" placeholder="Enter your Sister 2" required>
                </div>

                <div class="remember-me">
                    <label for="remember">
                        <input type="checkbox" id="remember" name="remember"> Remember me
                    </label>
                </div>

                <button type="submit" class="btn-login">Submit</button>
                <br>
                <br>
                <button type="Reset" class="btn-login">Reset data</button>

                

               
            </form>
        </div>
    </div>

</body>
</html>
